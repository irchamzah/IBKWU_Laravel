@extends('layouts.app')

@section('title', 'Edit IBK & PPK')

@section('content')

<div class="container">
    <a href="/ibkppkadmin/create" class="btn btn-primary mb-3">Tambah Data</a>
    @if($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($ibkppkadmins as $ibkppkadmin)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$ibkppkadmin->title}}</td>
                    <td>{{$ibkppkadmin->description}}</td>
                    <td><img src="/image/{{$ibkppkadmin->image}}" alt="" class="img-fluid" width="90"></td>
                    <td>
                        <a href="{{route('ibkppkadmin.edit', $ibkppkadmin->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('ibkppkadmin.destroy', $ibkppkadmin->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection