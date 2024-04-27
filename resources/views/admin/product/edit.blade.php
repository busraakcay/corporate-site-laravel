@extends('admin.layouts.master')
@section('content')


<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Ürün Güncelle</h3>
        </div>
    </div>
    <form action="{{ route('admin.products.update', $product->id) }}" class="form" id="kt_form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="mx-2">
                <div class="form-group">
                    <label for="code">Ürün Kodu <span class="text-danger">*</span></label>
                    <input type="text" id="code" name="code" value="{{ $product->code }}" class="form-control" placeholder="Ürün kodunu giriniz" />
                </div>
                <div class="form-group">
                    <label for="size">Ürün Asortisi <span class="text-danger">*</span></label>
                    <p class="text-warning">Asorti bilgisini: 40-1,41-2,42-2 olarak, arada boşluk olmadan giriniz</p>
                    <input type="text" id="size" name="size" value="{{ $product->size }}" class="form-control" placeholder="Ürün asortisini giriniz: 40-1,41-2,42-2" />
                </div>
            </div>

            <label class="ml-2" for="code">Ürün Resimleri <span class="text-danger">*</span></label>
            <div class="mx-2">
                <div class="mb-5">
                    <div class="dropzone dropzone-default dropzone-primary" id="myDropzone">
                        <div class="dz-message needsclick">
                            Ürün resimlerini buraya bırakın veya yüklemek için tıklayın
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-xl-12">
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
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name_{{$language["code"]}}">Ürün Adı ({{$language['name']}}) <span class="text-danger">*</span></label>
                                <input type="text" id="name_{{$language["code"]}}" name="name_{{$language["code"]}}" value="{{ $product['name_' . $language["code"]] }}" class="form-control" placeholder="Ürün adını giriniz" />
                            </div>
                            <div class="form-group col-6">
                                <label for="base_{{$language["code"]}}">Ürün Tabanı ({{$language['name']}}) <span class="text-danger">*</span></label>
                                <input type="text" id="base_{{$language["code"]}}" name="base_{{$language["code"]}}" value="{{ $product['base_' . $language["code"]] }}" class="form-control" placeholder="Ürün rengini giriniz" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="color_{{$language["code"]}}">Ürün Rengi ({{$language['name']}}) <span class="text-danger">*</span></label>
                                <input type="text" id="color_{{$language["code"]}}" name="color_{{$language["code"]}}" value="{{ $product['color_' . $language["code"]] }}" class="form-control" placeholder="Ürün rengini giriniz" />
                            </div>

                            <div class="form-group col-6">
                                <label for="material_{{$language["code"]}}">Ürün Materyali ({{$language['name']}}) <span class="text-danger">*</span></label>
                                <input type="text" id="material_{{$language["code"]}}" name="material_{{$language["code"]}}" value="{{ $product['material_' . $language["code"]] }}" class="form-control" placeholder="Ürün rengini giriniz" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description_{{$language["code"]}}">Ürün İçeriği ({{$language['name']}}) <span class="text-danger">*</span></label>
                            <textarea type="text" class="ckeditor" id="ckeditor1" name="description_{{$language["code"]}}" value="{{ $product['description_' . $language["code"]] }}" class="form-control" rows="5">{{ $product['description_' . $language["code"]] }}</textarea>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
        <div class="card-footer">
            <button type="sumbit" class="btn btn-primary btn-shadow mr-2">Kaydet</button>
        </div>
        <input type="hidden" id="croppedProductImages" name="croppedProductImages" value="">
    </form>
</div>
<input type="hidden" value="{{ getGeneralPhotoDimensions()["width"] }}" id="width" />
<input type="hidden" value="{{ getGeneralPhotoDimensions()["height"] }}" id="height" />


<input type="hidden" id="cropImage" value="{{ route('cropImage') }}">
<input type="hidden" id="cropImageDestroy" value="{{ route('cropImageDestroy') }}">
<input type="hidden" id="getProductImagesToDropzone" value="{{ route('getProductImagesToDropzone') }}">


<!-- Bu style etiketi burada kalacak -->
<style type="text/css">
    .dz-preview .dz-image img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }

</style>
<!-- !!! -->
<script>
    Dropzone.options.myDropzone = {
        url: '/'
        , acceptedFiles: 'image/*'
        , autoProcessQueue: true
        , paramName: 'file'
        , addRemoveLinks: true
        , dictRemoveFile: "Kaldır"
        , dictCancelUpload: 'İptal et'
        , headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
        , thumbnailMethod: 'crop'
        , resizeWidth: parseInt(document.getElementById('width').value)
        , resizeHeight: parseInt(document.getElementById('height').value)
        , init: function() {
            var myDropzone = this;
            $.ajax({
                url: $("#getProductImagesToDropzone").val()
                , method: 'GET'
                , data: {
                    id: '{{ $productId }}'
                    , _token: "{{ csrf_token() }}"
                , }
                , success: function(data) {
                    $.each(data, function(key, value) {
                        var mockFile = {
                            name: value.image
                            , size: value.size
                            , accepted: true
                        , };
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, value.path);
                        myDropzone.emit("complete", mockFile);
                        mockFile.previewElement.classList.add('dz-success');
                        mockFile.previewElement.classList.add('dz-complete');
                    });
                }
            });
        }
        , accept: function(file, data) {
            var myDropzone = this;

            // Create the image editor overlay
            var editor = document.createElement('div');
            editor.style.position = 'fixed';
            editor.style.left = 0;
            editor.style.right = 0;
            editor.style.top = 0;
            editor.style.bottom = 0;
            editor.style.zIndex = 9999;
            editor.style.backgroundColor = '#000';
            // Append the editor to the page
            document.body.appendChild(editor);

            // Create the confirm button
            var confirm = document.createElement('button');
            confirm.style.position = 'absolute';
            confirm.style.left = 'auto';
            confirm.style.right = '100px';
            confirm.style.top = 'auto';
            confirm.style.bottom = '100px';
            confirm.style.bottom = '50px';
            confirm.style.zIndex = 9999;
            confirm.textContent = 'Kırp';
            confirm.setAttribute('class', 'btn btn-success');
            editor.appendChild(confirm);
            confirm.addEventListener('click', function() {

                // Get the canvas with image data from Cropper.js
                var canvas = cropper.getCroppedCanvas({
                    width: parseInt(document.getElementById('width').value)
                    , height: parseInt(document.getElementById('height').value)
                });

                // Turn the canvas into a Blob (file object without a name)
                canvas.toBlob(function(blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {

                        var base64data = reader.result;
                        $.ajax({
                            url: $("#cropImage").val()
                            , method: 'POST'
                            , data: {
                                image: base64data
                                , _token: "{{ csrf_token() }}"
                            , }
                            , success: function(data) {
                                myDropzone.emit('success', file);
                                var fileuploded = file.previewElement.querySelector("[data-dz-name]");
                                fileuploded.innerHTML = data;
                                var inputFile = document.getElementById("croppedProductImages")
                                if (inputFile.value !== "") {
                                    inputFile.value = inputFile.value + ',' + fileuploded.innerHTML
                                } else {
                                    inputFile.value = fileuploded.innerHTML
                                }

                                myDropzone.emit('complete', file);
                            }
                        });
                    };
                });

                // Remove the editor from view
                editor.parentNode.removeChild(editor);

            });

            // Load the image
            var image = new Image();
            image.src = URL.createObjectURL(file);
            editor.appendChild(image);


            // Create Cropper.js and pass image
            var cropper = new Cropper(image, {
                aspectRatio: parseInt(document.getElementById('width').value) / parseInt(document.getElementById('height').value)
            , });

        }
        , removedfile: function(file) {
            Swal.fire({
                title: "{{__('Emin misiniz?')}}"
                , text: "{{__('Bu işlemi geri alamazsınız!')}}"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , cancelButtonText: "{{__('İptal')}}"
                , confirmButtonText: "{{__('Sil')}}"
            }).then((result) => {
                if (result.isConfirmed) {
                    var fileName = file.previewElement.querySelector("[data-dz-name]").innerHTML;
                    $.ajax({
                        url: $("#cropImageDestroy").val()
                        , method: 'POST'
                        , data: {
                            fileName: fileName
                            , location: 'products'
                            , _token: "{{ csrf_token() }}"
                        , }
                        , success: function(response) {
                            var inputFile = document.getElementById("croppedProductImages");
                            var fileNames = inputFile.value.split(",");
                            var index = fileNames.indexOf(fileName);
                            if (index !== -1) {
                                fileNames.splice(index, 1);
                                inputFile.value = fileNames.join(",");
                            }
                        }
                    });
                    var inputFile = document.getElementById("croppedProductImages");
                    var fileNames = inputFile.value.split(",");
                    var index = fileNames.indexOf(fileName);
                    if (index !== -1) {
                        fileNames.splice(index, 1);
                        inputFile.value = fileNames.join(",");
                    }
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                }
            })
        }
    };

</script>
@endsection
