@extends('layout')
@section('judul')
Daftar Tugas 
@endsection
@section('konten')
<table class="table table-hover">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Lihat</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $a)
        <tr>
            <td>{{$a->judul}}</td>
            <td>{{$a->deskripsi}}</td>
            <td><a href="{{ url('tugas/'.$a->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a></td>
            <td><a href="{{ url('tugas/'.$a->id.'/edit')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a></td>
            <td><form action="{{ url('tugas/'.$a->id)}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection