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
                    <div class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700 w-min mb-2">
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
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan Perubahan</h2>
                    </div>
                </div>
            </button>
            <!--/Metric Card-->

            @if($message = Session::get('message'))
            <div role="alert">
                <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2 mt-10">
                    Berhasil!
                </div>
                <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                    <p>{{$message}}</p>
                </div>
            </div>
            @endif

        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full p-6">
            <div class=" rounded-lg shadow-xl p-5">

                {{-- Tentang Section Start --}}
                <section id="tentang" class="pt-36 pb-16 dark:bg-dark">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-6">
                                <h4 class="font-semibold text-lg text-primary mb-2">
                                    <input type="text" id="tentang_h1"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_h1') is-invalid @enderror"
                                        name="tentang_h1" value="{{$profil->tentang_h1}}" required
                                        autocomplete="tentang_h1" autofocus>
                                </h4>
                                <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl dark:text-white">
                                    <input type="text" id="tentang_h2"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_h2') is-invalid @enderror"
                                        name="tentang_h2" value="{{$profil->tentang_h2}}" required
                                        autocomplete="tentang_h2" autofocus>
                                </h2>
                                <div class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">
                                    @error('tentang_p1')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <textarea name="tentang_p1" id="editor1" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_p1') is-invalid @enderror"
                                        required autocomplete="tentang_p1" autofocus>{{$profil->tentang_p1}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                            <div class="mb-12 p-4 md:w-1/2">
                                <div class="rounded-md shadow-md overflow-hidden">
                                    <img src="/img/profil/{{$profil->tentang_img1}}" alt="" width="w-full">
                                    <input type="file"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_img1') is-invalid @enderror"
                                        name="tentang_img1" accept="image/*">
                                </div>
                                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
                                    <input type="text" id="tentang_h3"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_h3') is-invalid @enderror"
                                        name="tentang_h3" value="{{$profil->tentang_h3}}" required
                                        autocomplete="tentang_h3" autofocus>
                                </h3>
                                <p class="font-medium text-base text-secondary text-justify">
                                    <textarea name="tentang_p2" id="tentang_p2" cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_p2') is-invalid @enderror"
                                        required autocomplete="tentang_p2" autofocus>{{$profil->tentang_p2}}</textarea>
                                </p>
                            </div>
                            <div class="mb-12 p-4 md:w-1/2">
                                <div class="rounded-md shadow-md overflow-hidden">
                                    <img src="/img/profil/{{$profil->tentang_img2}}" alt="" width="w-full">
                                    <input type="file"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_img2') is-invalid @enderror"
                                        name="tentang_img2" accept="image/*">
                                </div>
                                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
                                    <input type="text" id="tentang_h4"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_h4') is-invalid @enderror"
                                        name="tentang_h4" value="{{$profil->tentang_h4}}" required
                                        autocomplete="tentang_h4" autofocus>
                                </h3>
                                <p class="font-medium text-base text-secondary text-justify">
                                    <textarea name="tentang_p3" id="tentang_p3" cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('tentang_p3') is-invalid @enderror"
                                        required autocomplete="tentang_p3" autofocus>{{$profil->tentang_p3}}</textarea>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Tentang Section End --}}

                {{-- Visi dan Misi Section Start --}}
                <section id="visi" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-800">
                    <div class="container">
                        <div class="container">
                            <div class="w-full px-4">
                                <div class="max-w-5xl mx-auto text-center mb-10">
                                    <h4 class="font-semibold text-lg text-primary mb-2">
                                        <input type="text" id="visi_h1"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('visi_h1') is-invalid @enderror"
                                            name="visi_h1" value="{{$profil->visi_h1}}" required autocomplete="visi_h1"
                                            autofocus>
                                    </h4>
                                    <h2
                                        class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                        <input type="text" id="visi_h2"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('visi_h2') is-invalid @enderror"
                                            name="visi_h2" value="{{$profil->visi_h2}}" required autocomplete="visi_h2"
                                            autofocus>
                                    </h2>
                                    <p class="font-medium text-md text-secondary md:text-lg"><textarea name="visi_p1"
                                            id="visi_p1" cols="30" rows="10" type="text"
                                            class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('visi_p1') is-invalid @enderror"
                                            required autocomplete="visi_p1" autofocus>{{$profil->visi_p1}}</textarea>
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-wrap">
                                <div class="w-full px-4 lg:w-1/2">
                                    <h2
                                        class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                        <input type="text" id="visi_h3"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('visi_h3') is-invalid @enderror"
                                            name="visi_h3" value="{{$profil->visi_h3}}" required autocomplete="visi_h3"
                                            autofocus>
                                    </h2>
                                    <ul
                                        class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                        @error('visi_p2')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <textarea name="visi_p2" id="editor2" cols="30" rows="10" type="text"
                                            class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('visi_p2') is-invalid @enderror"
                                            required autocomplete="visi_p2" autofocus>
                                            {{$profil->visi_p2}}</textarea>
                                    </ul>
                                </div>
                                <div class="w-full px-4 lg:w-1/2">
                                    <h2
                                        class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                        <input type="text" id="visi_h4"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('visi_h4') is-invalid @enderror"
                                            name="visi_h4" value="{{$profil->visi_h4}}" required autocomplete="visi_h4"
                                            autofocus>
                                    </h2>
                                    <ul
                                        class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                        @error('visi_p3')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <textarea name="visi_p3" id="editor3" cols="30" rows="10" type="text"
                                            class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('visi_p3') is-invalid @enderror"
                                            required autocomplete="visi_p3" autofocus>{{$profil->visi_p3}}</textarea>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Visi dan Misi Section End --}}

                {{-- Tujuan dan Sasaran Section Start --}}
                <section id="tujuan" class="pt-36 pb-16 dark:bg-dark">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-10">
                                <h4 class="font-semibold text-lg text-primary mb-2">
                                    <input type="text" id="tujuan_h1"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_h1') is-invalid @enderror"
                                        name="tujuan_h1" value="{{$profil->tujuan_h1}}" required
                                        autocomplete="tujuan_h1" autofocus>
                                </h4>
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                    <input type="text" id="tujuan_h2"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_h2') is-invalid @enderror"
                                        name="tujuan_h2" value="{{$profil->tujuan_h2}}" required
                                        autocomplete="tujuan_h2" autofocus>
                                </h2>
                                <p class="font-medium text-md text-secondary md:text-lg">
                                    <textarea name="tujuan_p1" id="tujuan_p1" cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_p1') is-invalid @enderror"
                                        required autocomplete="tujuan_p1" autofocus>{{$profil->tujuan_p1}}</textarea>
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2">
                                <h2
                                    class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                    <input type="text" id="tujuan_h3"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_h3') is-invalid @enderror"
                                        name="tujuan_h3" value="{{$profil->tujuan_h3}}" required
                                        autocomplete="tujuan_h3" autofocus>
                                </h2>
                                <ul
                                    class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                    @error('tujuan_p2')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <textarea name="tujuan_p2" id="editor4" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_p2') is-invalid @enderror"
                                        required autocomplete="tujuan_p2" autofocus>{{$profil->tujuan_p2}}</textarea>
                                </ul>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <h2
                                    class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                    <input type="text" id="tujuan_h4"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_h4') is-invalid @enderror"
                                        name="tujuan_h4" value="{{$profil->tujuan_h4}}" required
                                        autocomplete="tujuan_h4" autofocus>
                                </h2>
                                <ul
                                    class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                    @error('tujuan_p3')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <textarea name="tujuan_p3" id="editor5" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('tujuan_p3') is-invalid @enderror"
                                        required autocomplete="tujuan_p3" autofocus>{{$profil->tujuan_p3}}</textarea>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Tujuan dan Sasaran Section End --}}

                {{-- Struktur Kepengurusan Section Start --}}
                <section id="struktur" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-800">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-10">
                                <h4 class="font-semibold text-lg text-primary mb-2">
                                    <input type="text" id="struktur_h1"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('struktur_h1') is-invalid @enderror"
                                        name="struktur_h1" value="{{$profil->struktur_h1}}" required
                                        autocomplete="struktur_h1" autofocus>
                                </h4>
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                    <input type="text" id="struktur_h2"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('struktur_h2') is-invalid @enderror"
                                        name="struktur_h2" value="{{$profil->struktur_h2}}" required
                                        autocomplete="struktur_h2" autofocus>
                                </h2>
                                <p class="font-medium text-md text-secondary md:text-lg">
                                    <textarea name="struktur_p1" id="struktur_p1" cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('struktur_p1') is-invalid @enderror"
                                        required autocomplete="struktur_p1"
                                        autofocus>{{$profil->struktur_p1}}</textarea>
                                </p>
                                <div class="font-medium text-md text-secondary md:text-lg">
                                    @error('struktur_p2')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <textarea name="struktur_p2" id="editor6" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('struktur_p2') is-invalid @enderror"
                                        required autocomplete="struktur_p2"
                                        autofocus>{{$profil->struktur_p2}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                            <div class="mb-12 p-4">
                                <div class="rounded-md shadow-md overflow-hidden">
                                    <img src="/img/profil/{{$profil->struktur_img1}}" alt="" width="w-full">
                                    <input type="file"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('struktur_img1') is-invalid @enderror"
                                        name="struktur_img1" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Struktur Kepengurusan Section End --}}
            </div>
        </div>
    </div>

</form>

<div class="flex flex-row flex-wrap flex-grow mt-2 opacity-0">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h class="font-bold uppercase text-gray-600">Graph</h>
            </div>
            <div class="p-5">
                <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-7"), {
                "type": "bar",
                "data": {
                    "labels": ["January", "February", "March", "April"],
                    "datasets": [{
                        "label": "Page Impressions",
                        "data": [10, 20, 30, 40],
                        "borderColor": "rgb(255, 99, 132)",
                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                    }, {
                        "label": "Adsense Clicks",
                        "data": [5, 15, 10, 30],
                        "type": "line",
                        "fill": false,
                        "borderColor": "rgb(54, 162, 235)"
                    }]
                },
                "options": {
                    "scales": {
                        "yAxes": [{
                            "ticks": {
                                "beginAtZero": true
                            }
                        }]
                    }
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Graph</h2>
            </div>
            <div class="p-5">
                <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-0"), {
                "type": "line",
                "data": {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Views",
                        "data": [65, 59, 80, 81, 56, 55, 40],
                        "fill": false,
                        "borderColor": "rgb(75, 192, 192)",
                        "lineTension": 0.1
                    }]
                },
                "options": {}
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Graph</h2>
            </div>
            <div class="p-5">
                <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-1"), {
                "type": "bar",
                "data": {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Likes",
                        "data": [65, 59, 80, 81, 56, 55, 40],
                        "fill": false,
                        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                        "borderWidth": 1
                    }]
                },
                "options": {
                    "scales": {
                        "yAxes": [{
                            "ticks": {
                                "beginAtZero": true
                            }
                        }]
                    }
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
            </div>
            <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-4"), {
                "type": "doughnut",
                "data": {
                    "labels": ["P1", "P2", "P3"],
                    "datasets": [{
                        "label": "Issues",
                        "data": [300, 50, 100],
                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                    }]
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>


</div>

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
</script>

@endsection