@extends('layouts.app')

@section('title', 'Edit Akun Admin')

@section('content')

<div class="container">
    <a href="/user" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Nama</label><br>
                    @error('name')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br>
                    @error('email')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label><br>
                    @error('password')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Upload Foto Profil</label>

                    <div class="col-md-6">
                        <input type="file" class="form-control-form @error('image') is-invalid @enderror" name="image" accept="image/*">
                        @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
