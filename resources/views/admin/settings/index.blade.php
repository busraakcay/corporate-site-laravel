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

<div class="modal fade" id="modalLogo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yüklemeden Önce Resmi Kırpın</h5>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="" id="sample_image_logo" />
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="crop_logo_cancel" class="btn btn-danger">İptal</button>
                <button type="button" id="crop_logo" class="btn btn-primary">Kırp</button>
            </div>
        </div>
    </div>
</div>

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Ayarlar</h3>
        </div>
    </div>
    <form action="{{route('admin.updateSettings')}}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2">Genel Bilgiler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2">SEO (TR)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_2">SEO (EN)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_2">Hakkımızda (TR)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_2">Hakkımızda (EN)</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="kt_tab_pane_1_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                <div class="form-group row">
                                    <label class="col-3">Şirket Adı</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary">
                                                    <i class="fas fa-building text-white"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" type="text" value="{{$config->company_name}}" placeholder="Şirket Adı" name="companyName" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3">Email</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary">
                                                    <i class="fas fa-envelope text-white"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" value="{{$config->company_email}}" placeholder="Email" name="companyEmail" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3">Telefon</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary">
                                                    <i class="fas fa-phone text-white"></i>
                                                </span>
                                            </div>
                                            <input type="phone" class="form-control" value="{{$config->company_phone}}" placeholder="Telefon" name="companyPhone" />
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <label class="col-3">Logo</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary">
                                                    <i class="fas fa-image text-white"></i>
                                                </span>
                                            </div>
                                            <div class="image_area">
                                                <div class="d-block" for="upload_image_logo">
                                                    <input type="hidden" name="image" value="" id="uploaded_image_logo" />
                                                    <input type="hidden" value="{{getLogoDimensions()["width"]}}" id="width" />
                                                    <input type="hidden" value="{{getLogoDimensions()["height"]}}" id="height" />
                                                    <input type="file" name="logo" accept="image/jpeg,image/png,image/gif,image/jpg" class="form-control image" id="upload_image_logo" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label class="col-3">Geçerli Logo</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <img class="" src="{{asset('uploads/')}}/{{ $config->logo }}" alt="{{ $config->company_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3">Şirket Adresi</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary">
                                                    <i class="fas fa-map-marker-alt text-white"></i>
                                                </span>
                                            </div>
                                            <textarea class="form-control" name="companyAddress" placeholder="Şirket Adresi" width="100%">{{$config->company_address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteTitleTR">Site Başlık <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteTitleTR" name="siteTitleTR" class="form-control" value="{{$config->seo_title_tr}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteKeywordTR">Site Anahtar Kelimeler <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteKeywordTR" name="siteKeywordTR" class="form-control" value="{{$config->seo_keywords_tr}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteDescriptionTR">Site Açıklama <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteDescriptionTR" name="siteDescriptionTR" class="form-control" value="{{$config->seo_description_tr}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>


                <div class="tab-pane fade" id="kt_tab_pane_4_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteTitleEN">Site Başlık <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteTitleEN" name="siteTitleEN" class="form-control" value="{{$config->seo_title_en}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteKeywordEN">Site Anahtar Kelimeler <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteKeywordEN" name="siteKeywordEN" class="form-control" value="{{$config->seo_keywords_en}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label class="col-3" for="siteDescriptionEN">Site Açıklama <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" id="siteDescriptionEN" name="siteDescriptionEN" class="form-control" value="{{$config->seo_description_en}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-2"></div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_tab_pane_5_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my-5">
                                <div class="col-12">
                                    <textarea type="text" class="ckeditor" id="ckeditor1" name="aboutUsTR" value="{{ $config->about_us_tr }}" class="form-control">{{ $config->about_us_tr }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_tab_pane_6_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my-5">
                                <div class="col-12">
                                    <textarea type="text" class="ckeditor" id="ckeditor1" name="aboutUsEN" value="{{ $config->about_us_en }}" class="form-control">{{ $config->about_us_en }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="card-footer">
            <button type="sumbit" class="btn btn-primary btn-shadow mr-2">Kaydet</button>
        </div>

    </form>
    <input type="hidden" id="cropImage" value="{{ route('cropImage') }}">
</div>

<script>
    $(document).ready(function() {

        var $modal = $('#modalLogo');

        var image = document.getElementById('sample_image_logo');

        var cropper;

        $('#upload_image_logo').change(function(event) {
            var files = event.target.files;

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
        });

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

        $('#crop_logo_cancel').click(function() {
            $modal.modal('hide');
            document.getElementById('upload_image_logo').value = ''
        })

        $('#crop_logo').click(function() {
            canvas = cropper.getCroppedCanvas({
                width: parseInt(document.getElementById('width').value)
                , height: parseInt(document.getElementById('height').value)
            });
            canvas.toBlob(function(blob) {
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
                            document.getElementById("uploaded_image_logo").value = data;
                        }
                    });
                };
            });

        });

    });

</script>

@endsection
