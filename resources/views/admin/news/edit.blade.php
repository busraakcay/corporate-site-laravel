@extends('admin.layouts.master')
@section('content')
<!-- style etiketi burada kalmalı! -->
<style>
    .image_area {
        position: relative;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg {
        max-width: 1000px !important;
    }

</style>

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Haber Güncelle</h3>
        </div>
    </div>
    <form action="{{ route('admin.updateNews', $news->id) }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="mb-2 mx-2">
                <label for="date">Tarihi <span class="text-danger">*</span></label>
                <input type="date" id="date" name="date" class="form-control" value="{{ $news->date->format('Y-m-d') }}" />
            </div>
            <div class="col-xl-12">
                <div class="col-xl-1"></div>
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach ($languages as $language)
                        <li class="nav-item">
                            <a class="nav-link {{ $language['code'] == 'tr' ? 'active' : '' }}" data-toggle="tab" href="#kt_tab_pane_{{$language['code']}}_2">{{$language['name']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content mt-5">
                    @foreach ($languages as $language)
                    <div class="tab-pane fade {{ $language['code'] == 'tr' ? 'active show' : '' }}" id="kt_tab_pane_{{$language["code"]}}_2" role="tabpanel">
                        <div class="form-group">
                            <label for="image_{{$language["code"]}}">Resim ({{$language['name']}}) <span class="text-danger">*</span></label>
                            <input type="hidden" id="image_{{$language["code"]}}" name="image_{{$language["code"]}}" class="form-control" />
                            <input type="file" name="upload_image_{{$language["code"]}}" accept="image/jpeg,image/png,image/gif" data-id="{{$language["code"]}}" onchange="cropNews(document.getElementById(this.id).getAttribute('data-id'))" class="form-control image" id="upload_image_{{$language["code"]}}" />
                        </div>
                        <div class="form-group">
                            <label for="image">Geçerli Resim <span class="text-danger">*</span></label>
                            <input type="hidden" value='{{ $news['image_'.$language["code"]] }}' name="oldImage_{{$language["code"]}}" />
                            <img class="img-size" src="{{asset('uploads/news/')}}/{{ $news['image_'.$language["code"]] }}" alt='{{ $news['title_'.$language["code"]] }}'>
                        </div>
                        <div class="form-group">
                            <label for="title_{{$language["code"]}}">Haber Başlığı ({{$language['name']}}) <span class="text-danger">*</span></label>
                            <input type="text" id="title_{{$language["code"]}}" name="title_{{$language["code"]}}" value='{{ $news['title_'.$language["code"]] }}' class="form-control" placeholder="Haber başlığını giriniz" />
                        </div>
                        <div class="form-group">
                            <label for="content_{{$language["code"]}}">Haber İçeriği ({{$language['name']}}) <span class="text-danger">*</span></label>
                            <textarea type="text" class="ckeditor" id="ckeditor1" name="content_{{$language["code"]}}" value='{{ $news['content_'.$language["code"]]}}' class="form-control" rows="5">{{ $news['content_'.$language["code"]]}}</textarea>
                        </div>
                    </div>
                    <div class="modal fade" id="modalNews{{$language["code"]}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Yüklemeden Önce Resmi Kırpın</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="" id="sample_image_news{{$language["code"]}}" />
                                            </div>
                                            <div class="col-md-4">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="crop_news_cancel{{$language["code"]}}" class="btn btn-danger">İptal</button>
                                    <button type="button" id="crop_news{{$language["code"]}}" class="btn btn-primary">Kırp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{ getGeneralPhotoDimensions()['width'] }}" id="width" />
                    <input type="hidden" value="{{ getGeneralPhotoDimensions()['height'] }}" id="height" />
                    @endforeach
                    <script>
                        function cropNews(lang) {
                            var lang = lang;
                            var $modal = $('#modalNews' + lang);
                            var image = document.getElementById('sample_image_news' + lang);
                            var cropper;
                            var files = document.getElementById('upload_image_' + lang).files;
                            var done = function(url) {
                                image.src = url;
                                $modal.modal('show');
                            };
                            if (files && files.length > 0) {
                                reader = new FileReader();
                                reader.onload = function(event) {
                                    done(reader.result);
                                };
                                reader.readAsDataURL(files[0]);
                            }
                            $modal.on('shown.bs.modal', function() {
                                cropper = new Cropper(image, {
                                    aspectRatio: parseInt(document.getElementById('width').value) / parseInt(document.getElementById('height').value),
                                    //viewMode: 3,
                                    preview: '.preview'
                                });
                            }).on('hidden.bs.modal', function() {
                                cropper.destroy();
                                cropper = null;
                            });
                            $('#crop_news_cancel' + lang).click(function() {
                                $modal.modal('hide');
                                document.getElementById('upload_image_' + lang).value = ''
                            })
                            $('#crop_news' + lang).click(function() {
                                canvasLang = cropper.getCroppedCanvas({
                                    width: parseInt(document.getElementById('width').value)
                                    , height: parseInt(document.getElementById('height').value)
                                });
                                canvasLang.toBlob(function(blob) {
                                    url = URL.createObjectURL(blob);
                                    var reader = new FileReader();
                                    reader.readAsDataURL(blob);
                                    reader.onloadend = function() {
                                        var base64data = reader.result;
                                        $modal.modal('hide');
                                        $.ajax({
                                            url: $("#cropImage").val()
                                            , method: 'POST'
                                            , data: {
                                                image: base64data
                                                , _token: "{{ csrf_token() }}"
                                            , }
                                            , success: function(data) {
                                                // console.log(data);
                                                document.getElementById("image_" + lang).value = data;
                                            }
                                        });
                                    };
                                });
                            });
                        }

                    </script>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
        <div class="card-footer">
            <button type="sumbit" class="btn btn-primary btn-shadow mr-2">Kaydet</button>
        </div>
    </form>
    <input type="hidden" id="cropImage" value="{{ route('cropImage') }}">
</div>
@endsection
