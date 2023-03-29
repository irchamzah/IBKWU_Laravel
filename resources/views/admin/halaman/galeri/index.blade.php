@extends('admin.layouts.app')

@section('title', 'Edit Galeri')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

{{-- <div class="container">
    <a href="/galeri/create" class="btn btn-primary mb-3">Tambah Data</a>
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
                @foreach ($galeris as $galeri)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$galeri->title}}</td>
                    <td>{{$galeri->description}}</td>
                    <td><img src="/image/{{$galeri->image}}" alt="" class="img-fluid" width="90"></td>
                    <td>
                        <a href="{{route('galeri.edit', $galeri->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('galeri.destroy', $galeri->id)}}" method="POST">
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
</div> --}}

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">

        <!--Metric Card-->
        <a href="/admin/halaman">
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
        <a href="/admin/halaman">
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan Perubahan</h2>
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

            {{-- Rekomendasi Tenant Section Start --}}
            <section id="home" class="pt-36 pb-32 dark:bg-dark">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-0">
                            <h4 class="animate-bounce font-semibold text-lg text-primary mb-2">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Sorotan Galeri Tenant" required autocomplete="name" autofocus>
                            </h4>
                            <h2
                                class="animate-bounce font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-dark bg-clip-text">
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" value="Rekomendasi Produk" required autocomplete="name"
                                        autofocus></span>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Berikut adalah tenant yang direkomendasikan." required
                                    autocomplete="name" autofocus>
                            </p>

                        </div>

                    </div>


                </div>
            </section>
            {{-- Rekomendasi Tenant Section End --}}

            {{-- Galeri Tenant Section Start --}}
            <section id="tenant" class="pt-36 pb-32 bg-slate-200 dark:bg-slate-800">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-10">
                            <h4 class="font-semibold text-lg text-primary mb-2">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Galeri Tenant" required autocomplete="name" autofocus>
                            </h4>
                            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Produk yang Tersedia" required autocomplete="name" autofocus>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Berikut Semua Produk yang Tersedia." required autocomplete="name"
                                    autofocus>
                            </p>
                        </div>

                        <div class="justify-center">
                            <div class="flex justify-center mx-auto">
                                <div class="mb-3 xl:w-96">
                                    <!--Metric Card-->
                                    <a href="/admin/halaman/galeri/tambah_produk">
                                        <button
                                            class="bg-primary text-white rounded-lg p-5 hover:opacity-90 mb-10 w-full">
                                            <div class="flex flex-row items-center justify-center">
                                                <div class="text-right md:text-center">
                                                    <h2 class="font-bold uppercase">Tambah Produk Baru</h2>
                                                </div>
                                            </div>
                                        </button>
                                    </a>
                                    <!--/Metric Card-->
                                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                                        <input type="search"
                                            class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                            placeholder="Cari Produk" aria-label="Search"
                                            aria-describedby="button-addon1" />
                                        <button
                                            class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                                            type="button" id="button-addon1" data-te-ripple-init
                                            data-te-ripple-color="light">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- Pilih Kategori --}}
                            <div class="flex justify-center mx-auto mb-10">
                                <div class="mb-3 xl:w-96">
                                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                                        <button id="kategoriGaleri" name="kategoriGaleri"
                                            data-dropdown-toggle="navMenuGaleri"
                                            class="text-white bg-primary hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800 mx-auto group"
                                            type="button">
                                            Pilih Kategori
                                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" class="">
                                                </path>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="navMenuGaleri"
                                            class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-full dark:bg-gray-700 top-12 text-center">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                        out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                    <img src="https://source.unsplash.com/360x200?programming" alt="Programming"
                                        class="w-full">
                                    <div class="py-8 px-6">
                                        <h3>
                                            <a href="#"
                                                class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Tips
                                                Belajar Programming</a>
                                        </h3>
                                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet
                                            consectetur adipisicing
                                            elit. Explicabo, harum!</p>
                                        <a href="/admin/halaman/galeri/detail_galeri"
                                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Edit</a>
                                        <a href="#"
                                            class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                    <img src="https://source.unsplash.com/360x200?mechanical+keyboard"
                                        alt="Mechanical Keyboard" class="w-full">
                                    <div class="py-8 px-6">
                                        <h3>
                                            <a href="#"
                                                class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Review
                                                Keyboard GMMK Pro</a>
                                        </h3>
                                        <p class="font-medium text-base text-secondary mb-6">Lorem, ipsum dolor sit amet
                                            consectetur adipisicing
                                            elit. Commodi minima quisquam quos?</p>
                                        <a href="/admin/halaman/galeri/detail_galeri"
                                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Edit</a>
                                        <a href="#"
                                            class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                    <img src="https://source.unsplash.com/360x200?coffe" alt="Programming"
                                        class="w-full">
                                    <div class="py-8 px-6">
                                        <h3>
                                            <a href="#"
                                                class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Menikmati
                                                Secangkir Kopi</a>
                                        </h3>
                                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet
                                            consectetur adipisicing
                                            elit. Dicta minus enim voluptates rem sint eius iusto.</p>
                                        <a href="/admin/halaman/galeri/detail_galeri"
                                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Edit</a>
                                        <a href="#"
                                            class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            {{-- Galeri Tenant Section End --}}

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