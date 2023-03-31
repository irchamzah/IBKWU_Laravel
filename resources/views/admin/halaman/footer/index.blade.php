@extends('admin.layouts.app')

@section('title', 'Edit Footer')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

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

            {{-- Footer Start --}}
            <footer class="bg-dark pt-24 pb-12">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                            <h2 class="font-bold text-4xl text-white mb-5">IBKWU</h2>
                            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                            <p>
                                <input type="text" id="name"
                                    class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="irchamzah.fikri.ababil@gmail.com" required autocomplete="name"
                                    autofocus placeholder="Email IBKWU..">
                            </p>
                            <p>
                                <input type="text" id="name"
                                    class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name"
                                    value="Jl. Mastrip, Kotak Pos 164 – Tegalgede, Sumbersari, Kabupaten Jember, Jawa Timur 68124 "
                                    required autocomplete="name" autofocus placeholder="Alamat Kantor IBKWU..">
                            </p>
                        </div>
                        <div class="w-full px-4 mb-12 md:w-1/3">
                        </div>
                        <div class="w-full px-4 mb-12 md:w-1/3">
                            <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                            <ul class="text-slate-300">
                                <li>
                                    <a href="#" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-base hover:text-primary mb-3">Profil</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-base hover:text-primary mb-3">Galeri Tenant</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full pt-10 border-t border-slate-700">
                        <div class="flex items-center justify-center mb-5 flex-col">
                            {{-- Youtube --}}
                            <input type="text" id="name"
                                class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                name="name" value="https://youtube.com/ibkwu" required autocomplete="name" autofocus
                                placeholder="Link Youtube..">
                            <input type="text" id="name"
                                class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                name="name" value="https://instagram.com/ibkwu" required autocomplete="name" autofocus
                                placeholder="Link Instagram..">
                            <input type="text" id="name"
                                class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                name="name" value="https://twitter.com/ibkwu" required autocomplete="name" autofocus
                                placeholder="Link Twitter..">
                            <input type="text" id="name"
                                class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                name="name" value="https://linkedin.com/in/ibkwu" required autocomplete="name" autofocus
                                placeholder="Link LinkedIn..">

                        </div>
                        <p class="font-medium text-xs text-slate-500 text-center">Dibuat oleh <a
                                href="https://instagram.com/irchamzah" target="_blank"
                                class="font-bold text-primary">Irchamzah
                                Fikri Ababil</a>, menggunakan <a href="https://tailwindcss.com" target="_blank"
                                class="font-bold text-sky-500">Tailwind CSS</a>.</p>
                    </div>
                </div>
            </footer>
            {{-- Footer End --}}

        </div>
    </div>
</div>


<div class="flex flex-row flex-wrap flex-grow mt-2 opacity-0">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6 opacity-0">
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

    <div class="w-full md:w-1/2 xl:w-1/3 p-6 opacity-0">
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

    <div class="w-full md:w-1/2 xl:w-1/3 p-6 opacity-0">
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

    <div class="w-full md:w-1/2 xl:w-1/3 p-6 opacity-0">
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

</div>

@endsection