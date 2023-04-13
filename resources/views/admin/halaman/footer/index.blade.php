@extends('admin.layouts.app')

@section('title', 'Edit Footer')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<form action="{{route('admin.halaman.footer.update', $footer->id)}}" method="POST" enctype="multipart/form-data">
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

                {{-- Footer Start --}}
                <footer class="bg-dark pt-24 pb-12">
                    <div class="container">
                        <div class="flex flex-wrap">
                            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                                <h2 class="font-bold text-4xl text-white mb-5">IBKWU</h2>
                                <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                                <p>
                                    <input type="text" id="phone"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('phone') is-invalid @enderror"
                                        name="phone" value="{{$footer->phone}}" required autocomplete="phone" autofocus
                                        placeholder="Telepon IBKWU..">
                                </p>
                                <p>
                                    <input type="text" id="email"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('email') is-invalid @enderror"
                                        name="email" value="{{$footer->email}}" required autocomplete="email" autofocus
                                        placeholder="Email IBKWU..">
                                </p>
                                <p>
                                    <input type="text" id="address"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('address') is-invalid @enderror"
                                        name="address" value="{{$footer->address}}" required autocomplete="address"
                                        autofocus placeholder="Alamat Kantor IBKWU..">
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
                                        <a href="#" class="inline-block text-base hover:text-primary mb-3">footer</a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-block text-base hover:text-primary mb-3">Galeri
                                            Tenant</a>
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
                                <input type="text" id="yt_link"
                                    class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('yt_link') is-invalid @enderror"
                                    name="yt_link" value="{{$footer->yt_link}}" required autocomplete="yt_link"
                                    autofocus placeholder="Link Youtube..">
                                <input type="text" id="ig_link"
                                    class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('ig_link') is-invalid @enderror"
                                    name="ig_link" value="{{$footer->ig_link}}" required autocomplete="ig_link"
                                    autofocus placeholder="Link Instagram..">
                                <input type="text" id="twt_link"
                                    class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('twt_link') is-invalid @enderror"
                                    name="twt_link" value="{{$footer->twt_link}}" required autocomplete="twt_link"
                                    autofocus placeholder="Link Twitter..">
                                <input type="text" id="li_link"
                                    class="text-dark block border border-grey-light w-full sm:w-96 h-9 p-3 rounded mb-4 @error('li_link') is-invalid @enderror"
                                    name="li_link" value="{{$footer->li_link}}" required autocomplete="li_link"
                                    autofocus placeholder="Link LinkedIn..">

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
</form>

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