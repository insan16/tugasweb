<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar dengan Dropzone di Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Upload Gambar dengan Dropzone di Laravel</h1><br>
                <form action="{{ route('dropzone.store') }}" method="POST" name="file" enctype="multipart/form-data" class="dropzone" id="image-upload">
                    @csrf
                    <div>
                        <h3 class="text-center">Unggah Beberapa Gambar</h3>
                    </div>
                </form>
                <button type="button" id="button" class="btn btn-primary">Unggah</button>
                <div id="success-message" class="mt-3" style="display: none;">
                    <div class="alert alert-success" role="alert">
                        Gambar berhasil diunggah!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            createImageThumbnails: true,
            autoProcessQueue: false,
            init: function () {
                var myDropzone = this;

                // Aksi ketika tombol unggah diklik
                $("#button").click(function (e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                this.on('sending', function (file, xhr, formData) {
                    // Menambahkan semua input form ke formData Dropzone untuk dipost
                    var data = $('#image-upload').serializeArray();
                    $.each(data, function (key, el) {
                        formData.append(el.name, el.value);
                    });
                });

                this.on('success', function (file, response) {
                    // Menampilkan pesan sukses setelah berhasil mengunggah gambar
                    $('#success-message').show();
                });
            }
        };
    </script>
</body>
</html>