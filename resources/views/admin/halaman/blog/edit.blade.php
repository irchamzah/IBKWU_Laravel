@extends('admin.layouts.app')

@section('title', 'Edit blog blog Tenant')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<form action="{{route('admin.halaman.blog.update_blog', $detail_blog->id)}}" method="POST"
    enctype="multipart/form-data">
    @csrf

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">

            <!--Metric Card-->
            <div class="w-min">
                <a href="/admin/halaman/blog">
                    <div class="bg-blue-600 text-white -lg p-5 hover:bg-blue-700 w-min mb-2">
                        <div class="flex flex-row items-center justify-center">
                            <div class="text-center">
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
                    <div class="text-center">
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
                <section id="tentang" class="pt-36 pb-16 bg-white">
                    <div class="sm:container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto mb-6">

                                <div class="shadow-md p-4">
                                    <div><a href="#" class="text-primary hover:text-dark">Home</a> /
                                        {{$detail_blog->judul_h1}}</div>
                                </div>

                                <div class="flex flex-wrap">

                                    <div class="w-full p-4 lg:w-3/4">
                                        <h1 class="font-bold text-3xl my-5 text-justify">
                                            @error('judul_h1')
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                            <input type="text" id="judul_h1"
                                                class="block border border-grey-light w-full p-3  mb-4 @error('judul_h1') is-invalid @enderror"
                                                name="judul_h1" placeholder="Judul blog.."
                                                value="{{$detail_blog->judul_h1}}" required autocomplete="judul_h1"
                                                autofocus>
                                        </h1>
                                        <hr>
                                        <small class="text-slate-400">{{
                                            $detail_blog->created_at->diffForHumans()}} |
                                            {{$detail_blog->kategori_blog->kategori}}
                                        </small>

                                        @error('deskripsi_p1')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <div class="font-medium text-base text-dark text-justify mt-7 mb-3">
                                            <textarea type="text" id="editor1" name="deskripsi_p1"
                                                class="w-full p-3 -md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-96">{{$detail_blog->deskripsi_p1}}</textarea>
                                        </div>

                                        @foreach($foto_blogs as $foto_blog)
                                        <div class="mb-12 w-full">
                                            <div id="show-modal" class="-md shadow-md overflow-hidden mx-auto">
                                                <img src="/image/foto_blog/{{$foto_blog->blog_img1}}" alt=""
                                                    width="w-full">
                                            </div>
                                            <h3 class="font-semibold text-sm text-dark mt-5 mb-3 text-center">
                                                {{$foto_blog->blog_h1}}</h3>
                                            <div class="font-medium text-base text-dark text-justify">
                                                {!!$foto_blog->blog_p1!!}
                                            </div>
                                            <div class="w-full mx-auto justify-center flex mt-5">
                                                <a href="{{route('admin.halaman.blog.edit_blog.edit_foto', $foto_blog->id)}}"
                                                    class="font-medium text-sm text-white bg-primary py-2 px-4 -lg hover:opacity-80 mx-2">Edit</a>
                                                <a href="{{route('admin.halaman.blog.edit_blog.delete_foto', $foto_blog->id)}}"
                                                    class="font-medium text-sm text-white bg-red-500 py-2 px-4 -lg hover:opacity-80 mx-2">Hapus</a>
                                            </div>
                                        </div>
                                        @endforeach

                                        <!--Metric Card-->
                                        <div class="w-min mx-auto">
                                            <a
                                                href="{{route('admin.halaman.blog.edit_blog.tambah_foto', $detail_blog->id)}}">
                                                <div
                                                    class="bg-primary text-white -lg p-5 hover:opacity-90 mb-10 w-full block mx-auto sm:w-96">
                                                    <div class="flex flex-row items-center justify-center">
                                                        <div class="text-center">
                                                            <h2 class="font-bold uppercase">Tambah Foto</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--/Metric Card-->

                                        <hr class="mt-5">
                                    </div>

                                    <div class="w-full p-4 lg:w-1/4">
                                        <div class="">

                                            <h1 class="text-base mb-4 mt-7">Foto Sampul :</h1>
                                            <img src="/image/detail_blog/{{$detail_blog->detail_blog_img}}"
                                                alt="Programming" class="w-full">
                                            <input type="file"
                                                class="block border border-grey-light w-full p-3  mb-4 @error('detail_blog_img') is-invalid @enderror"
                                                name="detail_blog_img" accept="image/*">

                                            <h1 class="text-base mb-4 mt-7">Video :</h1>
                                            <div class="w-full mb-10">
                                                <iframe class=""
                                                    src="https://www.youtube.com/embed/{{$detail_blog->link_yt}}"></iframe>
                                                <img src="/image/contoh_link_yt.png" alt="" class="my-5 mx-auto">
                                                @error('link_yt')
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                                <input type="text" id="link_yt"
                                                    class="block border border-grey-light w-full p-3  mb-4 @error('link_yt') is-invalid @enderror"
                                                    name="link_yt" placeholder="Kode link youtube.."
                                                    value="{{$detail_blog->link_yt}}" required autocomplete="link_yt"
                                                    autofocus>
                                            </div>

                                            <h1 class="text-base mb-4 mt-7">Pilih Kategori blog :</h1>
                                            <select name="kategori" id="kategori"
                                                class="border border-slate-400 p-2 -lg w-full capitalize text-slate-500 mb-10">

                                                @foreach ($kategoris as $kategori)
                                                <option value="{{$kategori->id}}"
                                                    class="block px-4 py-2 text-sm text-{{$kategori->kategori}}-500 hover:bg-gray-100 hover:text-gray-900 capitalize "
                                                    role="menuitem" @if($kategori->kategori ==
                                                    '{{$kategori->kategori}}')
                                                    selected
                                                    @endif>{{$kategori->kategori}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Tentang Section End --}}

            </div>
        </div>
    </div>

</form>

<div class="flex flex-row flex-wrap flex-grow mt-2 opacity-0">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent -lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 -tl-lg -tr-lg p-2">
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
        <div class="bg-white border-transparent -lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 -tl-lg -tr-lg p-2">
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
        <div class="bg-white border-transparent -lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 -tl-lg -tr-lg p-2">
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
        <div class="bg-white border-transparent -lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 -tl-lg -tr-lg p-2">
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
</script>

@endsection