@extends('layouts.app')

@section('title', 'Edit Profiladmin')

@section('content')

<div class="container">
    <a href="/profiladmin" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('profiladmin.update', $profiladmin->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label><br>
                    @error('title')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$profiladmin->title}}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label><br>
                    @error('description')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$profiladmin->description}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label><br>
                    @error('image')
                        <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="file" class="form-control" name="image">
                    <img src="/image/{{$profiladmin->image}}" alt="" class="im-fluid" width="90">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
