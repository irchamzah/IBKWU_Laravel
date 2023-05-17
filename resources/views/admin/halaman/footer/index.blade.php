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
                            <h2 class="font-bold uppercase">Simpan</h2>
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
                                <h3 class="font-bold text-2xl mb-2">ALAMAT KANTOR</h3>
                                <p class="my-5"><input type="text" id="address"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('address') is-invalid @enderror"
                                        name="address" value="{{$footer->address}}" required autocomplete="address"
                                        autofocus>
                                </p>
                                <p class="my-5"><input type="text" id="address_2"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('address_2') is-invalid @enderror"
                                        name="address_2" value="{{$footer->address_2}}" required
                                        autocomplete="address_2" autofocus></p>
                                <p class="my-5"><input type="text" id="phone"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('phone') is-invalid @enderror"
                                        name="phone" value="{{$footer->phone}}" required autocomplete="phone" autofocus>
                                </p>
                                <p class="my-5"><input type="text" id="phone_2"
                                        class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('phone_2') is-invalid @enderror"
                                        name="phone_2" value="{{$footer->phone_2}}" required autocomplete="phone_2"
                                        autofocus></p>
                            </div>
                            <div class="w-full px-4 mb-12 md:w-1/3 ">
                                <h3 class="font-bold text-2xl mb-2 text-slate-300 mx-auto text-center">MITRA IBKWU</h3>
                                <div class="flex flex-wrap">
                                    @if ($mitras->count())
                                    @foreach($mitras as $mitra)
                                    <div class="max-w-[120px]  mx-4 py-4 lg:mx-6 xl:mx-8 flex flex-col">
                                        <a href="{{$mitra->mitra_link}}" target="_blank">
                                            <img src="/image/mitra/{{$mitra->mitra_img}}" alt="Google"
                                                class="grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                                        </a>
                                        <a href="{{route('admin.halaman.beranda.edit_mitra', $mitra->id)}}"
                                            class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto my-1">Edit</a>

                                        <a href="{{route('admin.halaman.beranda.delete_mitra', $mitra->id)}}"
                                            class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto my-1">Hapus</a>
                                    </div>
                                    @endforeach
                                    @else
                                    <p
                                        class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                                        Mitra tidak Tersedia.</p>
                                    @endif

                                </div>
                                <a href="{{route('admin.halaman.beranda.tambah_mitra')}}"
                                    class="w-60 text-center py-3 rounded bg-primary text-white hover:opacity-90 focus:outline-none my-1 block mx-auto mt-10">Tambah
                                    Mitra
                                </a>
                            </div>
                            <div class="w-full px-4 mb-12 md:w-1/3">
                                <h3 class="font-bold text-2xl mb-2 text-slate-300 mx-auto text-center">LINK EKSTERNAL
                                    POLIJE</h3>
                                <ul class="text-slate-300 mt-4 text-center">
                                    <li>
                                        <div href="#" target="_blank"
                                            class="inline-block text-base hover:text-primary mb-3"><input type="text"
                                                id="link_1"
                                                class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('link_1') is-invalid @enderror"
                                                name="link_1" value="{{$footer->link_1}}" required autocomplete="link_1"
                                                autofocus></div>
                                    </li>
                                    <li>
                                        <div href="#" target="_blank"
                                            class="inline-block text-base hover:text-primary mb-3"><input type="text"
                                                id="link_2"
                                                class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('link_2') is-invalid @enderror"
                                                name="link_2" value="{{$footer->link_2}}" required autocomplete="link_1"
                                                autofocus></div>
                                    </li>
                                    <li>
                                        <div href="#" target="_blank"
                                            class="inline-block text-base hover:text-primary mb-3"><input type="text"
                                                id="link_3"
                                                class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('link_3') is-invalid @enderror"
                                                name="link_3" value="{{$footer->link_3}}" required autocomplete="link_3"
                                                autofocus></div>
                                    </li>
                                    <li>
                                        <div href="#" target="_blank"
                                            class="inline-block text-base hover:text-primary mb-3"><input type="text"
                                                id="link_4"
                                                class="text-dark block border border-grey-light w-full p-3 rounded mb-4 @error('link_4') is-invalid @enderror"
                                                name="link_4" value="{{$footer->link_4}}" required autocomplete="link_4"
                                                autofocus></div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-full pt-10 border-t border-slate-700">
                            {{-- <div class="flex items-center justify-center mb-5">

                                <a href="{{$footer->yt_link}}" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>YouTube</title>
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                    </svg>
                                </a>


                                <a href="{{$footer->ig_link}}" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </a>

                                <a href="{{$footer->twt_link}}" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Twitter</title>
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>

                                <a href="{{$footer->li_link}}" target="_blank"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn</title>
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                            </div> --}}
                            <p class="font-medium text-xs text-slate-500 text-center">© Hak Cipta 2018-2021 IBKWU</p>
                            {{-- <p class="font-medium text-xs text-slate-500 text-center">Dibuat oleh <a
                                    href="https://instagram.com/irchamzah" target="_blank"
                                    class="font-bold text-primary">Irchamzah
                                    Fikri Ababil</a>, menggunakan <a href="https://tailwindcss.com" target="_blank"
                                    class="font-bold text-sky-500">Tailwind CSS</a>.</p> --}}
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