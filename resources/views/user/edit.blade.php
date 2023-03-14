@extends('layouts.app')

@section('title', 'Edit Akun Admin')

@section('content')

<div class="container">
    <a href="/user" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="">Nama</label><br>
                    @error('name')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="">Email</label><br>
                    @error('email')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <label for="">Password</label><br>
                    @error('password')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" autocomplete="password" autofocus>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Upload Foto Profil</label><br>
                    @error('image')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="file" class="form-control" name="image">
                    <img src="/img/fotoadmin/{{$user->image}}" alt="" class="im-fluid" width="90">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
