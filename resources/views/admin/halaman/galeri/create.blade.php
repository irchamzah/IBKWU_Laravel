@extends('admin.layouts.app')

@section('title', 'Tambah Produk Galeri Tenant')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

{{-- <div class="container">
    <a href="/galeri" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('galeri.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label><br>
                    @error('title')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label><br>
                    @error('description')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                        placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label><br>
                    @error('image')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">

        <!--Metric Card-->
        <a href="/admin/halaman/galeri">
            <button class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Kembali</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->

        <!--Metric Card-->
        <a href="/admin/halaman/galeri">
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->
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
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" placeholder="Judul Produk.." required autocomplete="name" autofocus>
                            </h2>
                            <div class="w-full flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                                <div class="mb-12 w-full aspect-video">
                                    <iframe class="w-full h-full"
                                        src="https://www.youtube.com/embed/7G0ovtPqHnI"></iframe>
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" placeholder="Kode link youtube.. (ex: BAxwEIrXGAQ)" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>
                            <textarea type="text" id="email"
                                class="w-full text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-96"
                                placeholder="Deskripsi Produk.."></textarea>

                        </div>
                    </div>

                    <!--Metric Card-->

                    <button
                        class="bg-primary text-white rounded-lg p-5 hover:opacity-90 mb-10 block mx-auto w-full sm:w-96">
                        <a href="/admin/halaman/galeri/edit_produk/tambah_foto">
                            <div class="flex flex-row items-center justify-center">
                                <div class="text-right md:text-center">
                                    <h2 class="font-bold uppercase">Tambah Foto</h2>
                                </div>
                            </div>
                        </a>
                    </button>
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

                    {{-- <div class="w-full px-4">
                        <div class="flex flex-wrap items-center justify-center">

                            <a href="https://youtube.com/ibkwu" target="_blank"
                                class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-red-600 text-slate-500 hover:animate-pulse font-extrabold">
                                Youtube
                            </a>

                            <a href="https://instagram.com/ibkwu" target="_blank"
                                class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-pink-500 text-slate-500 hover:animate-pulse font-extrabold">
                                Instagram
                            </a>

                            <a href="https://twitter.com/ibkwu" target="_blank"
                                class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-sky-400 text-slate-500 hover:animate-pulse font-extrabold">
                                Twitter
                            </a>

                            <a href="https://linkedin.com/in/ibkwu" target="_blank"
                                class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-blue-500 text-slate-500 hover:animate-pulse font-extrabold">
                                LinkedIn
                            </a>

                        </div>
                    </div> --}}

                    <!--Metric Card-->

                    <button class="bg-primary text-white rounded-lg p-5 hover:opacity-90 block mx-auto w-full sm:w-96">
                        <a href="/admin/halaman/galeri/edit_produk/tambah_link">
                            <div class="flex flex-row items-center justify-center">
                                <div class="text-right md:text-center">
                                    <h2 class="font-bold uppercase">Tambah Link</h2>
                                </div>
                            </div>
                        </a>
                    </button>
                    <!--/Metric Card-->

                </div>
            </section>
            {{-- Visi dan Misi Section End --}}

        </div>
    </div>
</div>

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