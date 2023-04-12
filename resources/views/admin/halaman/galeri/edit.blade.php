@extends('admin.layouts.app')

@section('title', 'Edit Produk Galeri Tenant')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<form action="{{route('admin.halaman.galeri.update_produk', $detail_produk->id)}}" method="POST"
    enctype="multipart/form-data">
    @csrf

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">

            <!--Metric Card-->
            <div class="w-min">
                <a href="/admin/halaman/galeri">
                    <div class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700 w-min mb-2">
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
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-center">
                        <h2 class="font-bold uppercase">Simpan</h2>
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
                                <h4 class="font-semibold text-lg text-primary mb-2">Detail Produk</h4>
                                <h2 class="font-bold text-dark text-3xl mb-12 sm:text-4xl lg:text-5xl dark:text-white">
                                    @error('judul_h1')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <input type="text" id="judul_h1"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('judul_h1') is-invalid @enderror"
                                        name="judul_h1" placeholder="Judul Produk.."
                                        value="{{$detail_produk->judul_h1}}" required autocomplete="judul_h1" autofocus>
                                </h2>
                                <div class="w-full flex flex-wrap">
                                    <div class="w-full px-4 lg:w-1/2 aspect-video">
                                        <img src="/img/detail_produk/{{$detail_produk->detail_produk_img}}"
                                            alt="Programming" class="w-full">
                                        <input type="file"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('detail_produk_img') is-invalid @enderror"
                                            name="detail_produk_img" accept="image/*">
                                    </div>
                                    <div class="w-full px-4 lg:w-1/2 aspect-video">
                                        <iframe class="w-full aspect-video"
                                            src="https://www.youtube.com/embed/{{$detail_produk->link_yt}}"></iframe>
                                        <img src="/img/contoh_link_yt.png" alt="" class="my-5 mx-auto">
                                        @error('link_yt')
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                        <input type="text" id="link_yt"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('link_yt') is-invalid @enderror"
                                            name="link_yt" placeholder="Kode link youtube.."
                                            value="{{$detail_produk->link_yt}}" required autocomplete="link_yt"
                                            autofocus>
                                    </div>
                                </div>

                                <div class="w-52 my-10 text-left">
                                    <label for="kategori" class="">Pilih Kategori Produk</label>
                                    <select name="kategori" id="kategori"
                                        class="border border-slate-400 p-2 rounded-lg w-full capitalize text-slate-500">

                                        @foreach ($kategoris as $kategori)
                                        <option value="{{$kategori->id}}"
                                            class="block px-4 py-2 text-sm text-{{$kategori->kategori}}-500 hover:bg-gray-100 hover:text-gray-900 capitalize"
                                            role="menuitem" @if($kategori->kategori == '{{$kategori->kategori}}')
                                            selected
                                            @endif>{{$kategori->kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('deskripsi_p1')
                                <small style="color: red">{{$message}}</small>
                                @enderror
                                <div class="font-medium text-md text-secondary md:text-lg text-justify mb-2">
                                    <textarea type="text" id="editor1" name="deskripsi_p1"
                                        class="w-full p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-96 indent-8">{{$detail_produk->deskripsi_p1}}</textarea>
                                </div>

                            </div>
                        </div>



                        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">

                            @foreach($foto_produks as $foto_produk)
                            <div class="mb-12 p-4 md:w-1/2">
                                <div id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
                                    <img src="/img/foto_produk/{{$foto_produk->produk_img1}}" alt="" width="w-full">
                                </div>
                                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
                                    {{$foto_produk->produk_h1}}</h3>
                                <p class="font-medium text-base text-secondary text-justify">{{$foto_produk->produk_p1}}
                                </p>
                                <div class="w-full mx-auto justify-center flex mt-5">
                                    <a href="{{route('admin.halaman.galeri.edit_produk.edit_foto', $foto_produk->id)}}"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 mx-2">Edit</a>
                                    <a href="{{route('admin.halaman.galeri.edit_produk.delete_foto', $foto_produk->id)}}"
                                        class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80 mx-2">Hapus</a>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <!--Metric Card-->
                        <div class="w-min mx-auto">
                            <a href="{{route('admin.halaman.galeri.edit_produk.tambah_foto', $detail_produk->id)}}">
                                <div
                                    class="bg-primary text-white rounded-lg p-5 hover:opacity-90 mb-10 w-full block mx-auto sm:w-96">
                                    <div class="flex flex-row items-center justify-center">
                                        <div class="text-center">
                                            <h2 class="font-bold uppercase">Tambah Foto</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--/Metric Card-->

                    </div>
                </section>
                {{-- Tentang Section End --}}

                {{-- Visi dan Misi Section Start --}}
                <section id="visi" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-800">
                    <div class="container">
                        <div class="w-full px-4 mb-10">
                            <div class="mx-auto text-center">
                                <h4 class="font-semibold text-lg text-primary mb-2">Hubungi Kami</h4>
                                <h2 class="font-bold text-dark text-3xl sm:text-4xl lg:text-5xl dark:text-white">Sosial
                                    Media Kami
                                </h2>
                            </div>
                        </div>

                        <div class="w-full px-4">
                            <div class="flex flex-wrap items-center justify-center capitalize">

                                @foreach($sosmeds as $sosmed)
                                <div class="flex flex-col m-3">
                                    <a href="{{$sosmed->link_sosmed}}" target="_blank"
                                        class="w-20 rounded-full flex justify-center items-center hover:text-{{$sosmed->warna->nama_warna}}-600 text-slate-500 hover:animate-pulse font-extrabold">
                                        {{$sosmed->nama_sosmed}}
                                        <a href="{{route('admin.halaman.galeri.edit_produk.edit_sosmed', $sosmed->id)}}"
                                            class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto mb-1">Edit</a>
                                        <a href="{{route('admin.halaman.galeri.edit_produk.delete_sosmed', $sosmed->id)}}"
                                            class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto">Hapus</a>


                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <!--Metric Card-->
                        <div class="w-min mx-auto">
                            <a href="{{route('admin.halaman.galeri.edit_produk.tambah_sosmed', $detail_produk->id)}}">
                                <div
                                    class="bg-primary text-white rounded-lg p-5 hover:opacity-90 w-full sm:w-96 block mx-auto mt-4 ">
                                    <div class="flex flex-row items-center justify-center">
                                        <div class="text-center">
                                            <h2 class="font-bold uppercase">Tambah Sosmed</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--/Metric Card-->

                    </div>
                </section>
                {{-- Visi dan Misi Section End --}}

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
</script>

@endsection