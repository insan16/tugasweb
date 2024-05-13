<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload File Dengan Laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5">Upload File Dengan Laravel</h2>
            <div class="col-lg-8 mx-auto my-5">
                {{-- peringatan error --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif

                {{-- onother form --}}
                <form action="{{ route('upload.proses')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="file" id="">
                    </div>
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan" id="" cols="30" rows="10">

                        </textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form><br>

                {{-- <form action="{{ route('upload.proses') }}" method="POST" enctype="multipart/form-data"> --}}

                    <form action="{{ route('upload.resize') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    {{-- Pesan Jika succes --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close text-decoration-none"
                            data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('success')}}
                        </div>

                    @endif

                    {{-- Pesan Jika Error --}}
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close text-decoration-none"
                            data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('error')}}
                        </div>

                    @endif
        </div>
    </div>
</body>
</html>
