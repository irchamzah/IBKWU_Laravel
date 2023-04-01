@extends('admin.layouts.app')

@section('title', 'Akun Admin')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-pink-500 text-pink-500')
@section('menu-3', 'border-gray-800')
@section('menu-4', 'border-gray-800')
@section('content')



<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <a href="/admin/akun/create">
            <button class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700">

                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Tambah Akun Admin</h2>
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
        @if($error = Session::get('error'))
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 mt-10">
                Gagal!
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>{{$error}}</p>
            </div>
        </div>
        @endif
    </div>
</div>

<div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Akun yang Terdaftar</h2>
            </div>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-left text-blue-900">No</th>
                            <th class="text-left text-blue-900">Nama</th>
                            <th class="text-left text-blue-900 w-96">Email</th>
                            <th class="text-center text-blue-900">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="flex flex-col">
                                <a href="{{route('admin.akun.edit', $user->id)}}"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center mt-3 mb-1">Edit</a>
                                <form action="{{route('admin.akun.destroy', $user->id)}}" method="POST"
                                    onsubmit="return confirm('YAKIN HAPUS DATA INI?')">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full mb-3 mt-1">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
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