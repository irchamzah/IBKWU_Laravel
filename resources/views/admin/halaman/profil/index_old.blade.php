@extends('admin.layouts.app')

@section('title', 'Edit Profil')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<form action="{{route('admin.halaman.profil.update', $profil->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div class="w-min">
                <a href="/admin/halaman">
                    <div class="bg-blue-600 text-white -lg p-5 hover:bg-blue-700 w-min mb-2">
                        <div class="flex flex-row items-center justify-center">
                            <div class="text-right md:text-center">
                                <h2 class="font-bold uppercase">Kembali</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--/Metric Card-->

            <!--Metric Card-->
            <button class="bg-green-600 text-white -lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan</h2>
                    </div>
                </div>
            </button>
            <!--/Metric Card-->

            @if($message = Session::get('message'))
            <div role="alert">
                <div class="bg-green-500 text-white font-bold -t px-4 py-2 mt-10">
                    Berhasil!
                </div>
                <div class="border border-t-0 border-green-400 -b bg-green-100 px-4 py-3 text-green-700">
                    <p>{{$message}}</p>
                </div>
            </div>
            @endif

        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full p-6">
            <div class=" -lg shadow-xl p-5">

                {{-- Tentang Section Start --}}
                <section id="tentang" class="pt-36 pb-16 dark:bg-dark bg-white">
                    <div class="sm:container">

                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto mb-6">
                                <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl text-center">
                                    <input type="text" id="tentang_h1"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('tentang_h1') is-invalid @enderror"
                                        name="tentang_h1" value="{{$profil->tentang_h1}}" required
                                        autocomplete="tentang_h1" autofocus>
                                </h2>
                                <hr>
                                <div class="font-medium text-md  md:text-lg text-justify mb-2 mt-10">
                                    @error('tentang_p1')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <textarea name="tentang_p1" id="editor1" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3  mb-4 @error('tentang_p1') is-invalid @enderror"
                                        required autocomplete="tentang_p1" autofocus>{{$profil->tentang_p1}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                {{-- Tentang Section End --}}

                {{-- Visi dan Misi Section Start --}}
                <section id="visi" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
                    <div class="sm:container">
                        <div class="">
                            <div class="w-full px-4">
                                <div class="max-w-5xl mx-auto text-center mb-10">
                                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">
                                        <input type="text" id="visi_h1"
                                            class="block border border-grey-light w-full p-3  mb-4 @error('visi_h1') is-invalid @enderror"
                                            name="visi_h1" value="{{$profil->visi_h1}}" required autocomplete="visi_h1"
                                            autofocus>
                                    </h2>
                                    <hr>
                                </div>
                            </div>

                            <div class="flex flex-wrap">
                                <div class="w-full px-4 lg:w-1/2">
                                    <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
                                        <input type="text" id="visi_h2"
                                            class="block border border-grey-light w-full p-3  mb-4 @error('visi_h2') is-invalid @enderror"
                                            name="visi_h2" value="{{$profil->visi_h2}}" required autocomplete="visi_h2"
                                            autofocus>
                                    </h2>
                                    <div class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
                                        @error('visi_p1')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <textarea name="visi_p1" id="editor2" cols="30" rows="10" type="text"
                                            class="h-32 block border border-grey-light w-full p-3  mb-4 @error('visi_p1') is-invalid @enderror"
                                            required autocomplete="visi_p1" autofocus>{{$profil->visi_p1}}</textarea>
                                    </div>
                                </div>
                                <div class="w-full px-4 lg:w-1/2">
                                    <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
                                        <input type="text" id="visi_h3"
                                            class="block border border-grey-light w-full p-3  mb-4 @error('visi_h3') is-invalid @enderror"
                                            name="visi_h3" value="{{$profil->visi_h3}}" required autocomplete="visi_h3"
                                            autofocus>
                                    </h2>
                                    <div class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
                                        @error('visi_p2')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <textarea name="visi_p2" id="editor3" cols="30" rows="10" type="text"
                                            class="h-96 block border border-grey-light w-full p-3  mb-4 @error('visi_p2') is-invalid @enderror"
                                            required autocomplete="visi_p2" autofocus>
                                            {{$profil->visi_p2}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Visi dan Misi Section End --}}

                {{-- Tujuan dan Sasaran Section Start --}}
                <section id="tujuan" class="pt-36 pb-16 dark:bg-dark bg-white">
                    <div class="sm:container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-10">
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">
                                    <input type="text" id="tujuan_h1"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('tujuan_h1') is-invalid @enderror"
                                        name="tujuan_h1" value="{{$profil->tujuan_h1}}" required
                                        autocomplete="tujuan_h1" autofocus>
                                </h2>
                                <hr>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2">
                                <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
                                    <input type="text" id="tujuan_h2"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('tujuan_h2') is-invalid @enderror"
                                        name="tujuan_h2" value="{{$profil->tujuan_h2}}" required
                                        autocomplete="tujuan_h2" autofocus>
                                </h2>
                                <ul class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
                                    <textarea name="tujuan_p1" id="editor4" id="tujuan_p1" cols="30" rows="10"
                                        type="text"
                                        class="h-32 block border border-grey-light w-full p-3  mb-4 @error('tujuan_p1') is-invalid @enderror"
                                        required autocomplete="tujuan_p1" autofocus>{{$profil->tujuan_p1}}</textarea>
                                </ul>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
                                    <input type="text" id="tujuan_h3"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('tujuan_h3') is-invalid @enderror"
                                        name="tujuan_h3" value="{{$profil->tujuan_h3}}" required
                                        autocomplete="tujuan_h3" autofocus>
                                </h2>
                                <ul class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
                                    <textarea name="tujuan_p2" id="editor5" id="tujuan_p2" cols="30" rows="10"
                                        type="text"
                                        class="h-32 block border border-grey-light w-full p-3  mb-4 @error('tujuan_p2') is-invalid @enderror"
                                        required autocomplete="tujuan_p2" autofocus>{{$profil->tujuan_p2}}</textarea>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Tujuan dan Sasaran Section End --}}

                {{-- Struktur Kepengurusan Section Start --}}
                <section id="struktur" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
                    <div class="sm:container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-10">
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">
                                    <input type="text" id="struktur_h1"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('struktur_h1') is-invalid @enderror"
                                        name="struktur_h1" value="{{$profil->struktur_h1}}" required
                                        autocomplete="struktur_h1" autofocus>
                                </h2>
                                <hr>
                                <div class="font-medium text-md  md:text-lg text-justify mb-2 mt-16">
                                    <textarea name="struktur_p1" id="editor6" id="struktur_p1" cols="30" rows="10"
                                        type="text"
                                        class="h-32 block border border-grey-light w-full p-3  mb-4 @error('struktur_p1') is-invalid @enderror"
                                        required autocomplete="struktur_p1"
                                        autofocus>{{$profil->struktur_p1}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                            <div class="mb-12 p-4">
                                <div class="-md shadow-md overflow-hidden">
                                    <img src="/image/profil/{{$profil->struktur_img1}}" alt="" width="w-full">
                                    <input type="file"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('struktur_img1') is-invalid @enderror"
                                        name="struktur_img1" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Struktur Kepengurusan Section End --}}

                {{-- SDM Pendamping Section Start --}}
                <section id="tentang" class="pt-36 pb-16 dark:bg-dark bg-white">
                    <div class="sm:container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto mb-6">
                                <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl text-center">
                                    <input type="text" id="sdm_h1"
                                        class="block border border-grey-light w-full p-3  mb-4 @error('sdm_h1') is-invalid @enderror"
                                        name="sdm_h1" value="{{$profil->sdm_h1}}" required autocomplete="sdm_h1"
                                        autofocus>
                                </h2>
                                <hr>
                                <div class="font-medium text-md  md:text-lg text-justify mb-2 mt-10">
                                    <textarea name="sdm_p1" id="editor7" id="sdm_p1" cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3  mb-4 @error('sdm_p1') is-invalid @enderror"
                                        required autocomplete="sdm_p1" autofocus>{{$profil->sdm_p1}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                {{-- SDM Pendamping Section End --}}


            </div>
        </div>
    </div>

</form>


@endsection

@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor6' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor7' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection