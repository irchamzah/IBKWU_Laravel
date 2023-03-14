@extends('layouts.app')

@section('title', 'Edit Akun Admin')

@section('content')

<div class="container">
    <a href="/user/create" class="btn btn-primary mb-3">Tambah Data</a>
    <p>Catatan: Minimal ada 1 akun yang terdaftar (Jangan sampai semua akun terhapus)</p>
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
                    <th>Nama</th>
                    <th>Email</th>
                    {{-- <th>Password</th> --}}
                    <th>Foto Profil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    {{-- <td>{{$user->password}}</td> --}}
                    <td scope="row"><img class="img-fluid" width="200px" src="/img/fotoadmin/{{$user->image}}" alt=""></td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('user.destroy', $user->id)}}" method="POST" onsubmit="return confirm('YAKIN HAPUS DATA INI?')">
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
