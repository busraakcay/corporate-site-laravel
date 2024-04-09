<script>
    $(document).ready(function() {

        var $modal = $('#modal');

        var image = document.getElementById('sample_image');

        var cropper;

        $('#upload_image').change(function(event) {
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
                aspectRatio: 800 / 600,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });

        $('#crop').click(function() {
            canvas = cropper.getCroppedCanvas({
                width: 800,
                height: 600
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {

                    var base64data = reader.result;
                    $modal.modal('hide');
                    $.ajax({
                        url: '/cropImg',
                        method: 'POST',
                        data: {
                            image: base64data,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            //console.log(data);
                            document.getElementById("uploaded_image").value = data;
                        }
                    });
                    $modal.modal('hide');
                };
            });

        });

    });
</script>






<div class="form-group">
    <label>Ana Resim</label>
    <div class="image_area">
        <label class="d-block" for="upload_image">
            <input type="hidden" name="image" value="" id="uploaded_image" />
            <input type="file" name="uploadImage" class="form-control image" id="upload_image" />
        </label>
    </div>
</div>


<!-- Dropzone -->

<div class="form-group">
    <label>Ana Resim</label>
    <input class="form-control" type="file" name="image" value="{{old('image')}}">
</div>

<div class="dropzone previewContainer dropzone-previews dz-clickable" id="image-upload-dropzone" data-iptalet="Yüklemeyi iptal et" data-sil="Sil" data-iptaletonay="İptal etmek istediğinize emin misiniz?" data-gecersizuzanti="Bu uzantıya sahip dosyayı yükleyemezsiniz." data-hataolustu="Yükleme esnasında hata oluştu.">
    <div class="dz-message" data-dz-message="">
        <span>
            <span class="newbtn newbtn-success">
                <i class="fa fa-plus"></i>
                <span>Yüklenecek Resimleri Seçin (Max 10 Resim)</span>
            </span>
        </span>
    </div>
</div>