@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('menu-1', 'border-blue-500 text-blue-500')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-gray-800')
@section('menu-4', 'border-gray-800')
@section('content')
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600  shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total User Admin</h2>
                    <a href="/admin/akun">
                        <p class="font-bold text-3xl">{{ $totalUser }}</p>
                    </a>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500  shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total Galeri Tenant</h2>
                    <a href="/admin/halaman/galeri">
                        <p class="font-bold text-3xl">{{ $totalProduk }}</p>
                    </a>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600  shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total Post</h2>
                    <a href="/admin/halaman/blog">
                        <p class="font-bold text-3xl">{{ $totalBlog }}
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
</div>


<div class="flex flex-row flex-wrap flex-grow mt-2 opacity-">

    <div class="w-full md:w-1/2 xl:w-1/2 p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Komentar Terbaru Galeri Tenant</h2>
            </div>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-left text-blue-900">No</th>
                            <th class="text-left text-blue-900">Nama</th>
                            <th class="text-left text-blue-900">Komentar</th>
                            <th class="text-left text-blue-900">Tanggal</th>
                            <th class="text-left text-blue-900">Lihat Post</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($komens as $key => $komen)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $komen->nama_user }}</td>
                            <td>{{ $komen->komen_user }}</td>
                            <td>{{ $komen->created_at }}</td>
                            <td class="text-primary hover:underline"><a
                                    href="{{route('galeri.detail_galeri', $komen->post_slug)}}"
                                    target="_blank">Lihat</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $komens->links() }}

            </div>
        </div>
        <!--/table Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/2 p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Komentar Terbaru Post</h2>
            </div>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-left text-blue-900">No</th>
                            <th class="text-left text-blue-900">Nama</th>
                            <th class="text-left text-blue-900">Komentar</th>
                            <th class="text-left text-blue-900">Tanggal</th>
                            <th class="text-left text-blue-900">Lihat Post</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($komenbs as $key => $komenb)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $komenb->nama_user }}</td>
                            <td>{{ $komenb->komen_user }}</td>
                            <td>{{ $komenb->created_at }}</td>
                            <td class="text-primary hover:underline"><a
                                    href="{{route('blog.detail_blog', $komenb->post_slug)}}" target="_blank">Lihat</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $komenbs->links() }}

            </div>
        </div>
        <!--/table Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/2 p-6 opacity-0">
        <!--Graph Card-->
        <div class="bg-white border-transparent  shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Total Pengunjung</h2>
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
    <div class="w-full md:w-1/2 xl:w-1/2 p-6 opacity-0">
        <!--Graph Card-->
        <div class="bg-white border-transparent  shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Total Pengunjung</h2>
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
    <div class="w-full md:w-1/2 xl:w-1/2 p-6 opacity-0">
        <!--Graph Card-->
        <div class="bg-white border-transparent  shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Total Pengunjung</h2>
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




</div>
@endsection