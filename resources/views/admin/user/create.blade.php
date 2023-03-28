@extends('admin.layouts.app')

@section('title', 'Tambah Akun Admin')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-pink-500 text-pink-500')
@section('menu-3', 'border-gray-800')
@section('menu-4', 'border-gray-800')
@section('content')

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <a href="/admin/akun">
            <button class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Kembali</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->
    </div>
</div>

<div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Form Akun</h2>
            </div>

            <form action="{{route('admin.akun.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- component -->
                <div class="bg-grey-lighter flex flex-col">
                    <div class="container mx-auto flex-1 flex flex-col items-center justify-center">
                        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                            <div class="form-group">
                                <label for="name">Nama</label><br>
                                @error('name')
                                <small style="color: red">{{$message}}</small>
                                @enderror
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label><br>
                                @error('email')
                                <small style="color: red">{{$message}}</small>
                                @enderror
                                <input type="text" id="email"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label><br>

                                <input type="password" id="password"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}" required autocomplete="password"
                                    autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <div class="form-group">
                                    @error('password')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                    <input id="password-confirm" type="password"
                                        class="block border border-grey-light w-full p-3 rounded mb-4"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-2 col-form-label text-md-right">Upload Foto
                                    Profil</label>

                                <div class="col-md-6">
                                    @error('image')
                                    <div class="text-sm text-red-500">{{$message}}</div>
                                    @enderror
                                    <input type="file"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('image') is-invalid @enderror"
                                        name="image" accept="image/*">

                                </div>
                            </div>

                            <button type="submit"
                                class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-500 focus:outline-none my-1">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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