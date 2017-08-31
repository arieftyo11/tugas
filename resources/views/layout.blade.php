<!DOCTYPE html>
<html>
<head>
    <title>@yield('judul')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body> 

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('/tugas/create ')}}" class="btn btn-success"><i class="glyphicon-plus"></i> Tambah</a>
            <a href="{{ url('/tugas ')}}" class="btn btn-primary"><i class="glyphicon-plus"></i> Daftar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @yield('konten')
        </div>
    </div>

</body>
</html> 