@extends('admin.layouts.app')

@section('title', 'Edit Produk Galeri Tenant')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

{{-- <div class="container">
    <a href="/galeri" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('galeri.update', $galeri->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label><br>
                    @error('title')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$galeri->title}}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label><br>
                    @error('description')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$galeri->description}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label><br>
                    @error('image')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                    <input type="file" class="form-control" name="image">
                    <img src="/image/{{$galeri->image}}" alt="" class="im-fluid" width="90">
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
                                    name="name" placeholder="Judul Produk.." value="Judul Produk" required
                                    autocomplete="name" autofocus>
                            </h2>
                            <div class="w-full flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                                <div class="mb-12 w-full aspect-video">
                                    <iframe class="w-full h-full"
                                        src="https://www.youtube.com/embed/7G0ovtPqHnI"></iframe>
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" placeholder="Kode link youtube.. (ex: BAxwEIrXGAQ)"
                                        value="BAxwEIrXGAQ" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <textarea type="text" id="email"
                                class="w-full text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-96">
                                    <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2"><span
                                        class="font-bold">Deskripsi produk</span> Lorem ipsum dolor sit, amet consectetur
                                    adipisicing
                                    elit. Esse a
                                    odit harum iusto! Quidem tempore, ipsa facere veritatis praesentium eum cum debitis sit
                                    dolor ipsum
                                    dignissimos accusamus eligendi aut molestias quod aliquid ut dolorem quasi quibusdam,
                                    tempora
                                    consequatur
                                    quos libero natus! Odit at consequuntur fugiat consequatur, explicabo deleniti ipsum
                                    facilis
                                    officia
                                    quidem
                                    voluptatem quae animi hic ad, minus nemo beatae tenetur eum excepturi suscipit quam
                                    praesentium?
                                    Dolorem
                                    itaque commodi culpa tempora ducimus harum sed adipisci sapiente aspernatur? Explicabo
                                    quis
                                    hic
                                    libero nulla
                                    nihil excepturi nobis labore vero nostrum impedit, temporibus, similique consequatur,
                                    vitae
                                    officiis
                                    eius a
                                    accusantium culpa facilis minus.</p>
                                <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem
                                    ipsum
                                    dolor
                                    sit amet
                                    consectetur adipisicing elit. Assumenda nostrum doloremque voluptatibus, vitae error
                                    dolores
                                    cupiditate
                                    repellat! Magni provident est eos possimus inventore minima adipisci consequatur, dicta
                                    distinctio
                                    quae
                                    ullam unde dignissimos voluptate et ipsam architecto quasi sapiente omnis reiciendis
                                    nesciunt? Nam
                                    repellendus veritatis non sed cupiditate laudantium optio magnam sit placeat earum
                                    voluptates
                                    similique
                                    voluptate rem, doloremque facere. Nihil eos ipsa tenetur aliquid, sapiente provident
                                    vitae
                                    ea
                                    accusamus
                                    praesentium rem. Illo asperiores nam eaque itaque blanditiis, doloremque beatae
                                    explicabo,
                                    nesciunt
                                    omnis
                                    excepturi quae adipisci consectetur possimus perferendis placeat ab pariatur corrupti?
                                    Ipsa
                                    at nulla
                                    a
                                    officia hic iure soluta!</p>
                                <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem
                                    ipsum
                                    dolor
                                    sit amet
                                    consectetur adipisicing elit. Earum quos laudantium dolorum ex ratione maxime laborum
                                    beatae
                                    natus?
                                    Unde
                                    nobis qui delectus vitae similique! Mollitia possimus ipsam quisquam non odit eius
                                    impedit
                                    esse
                                    placeat,
                                    error nostrum cumque beatae natus quae eaque illo. Nam alias voluptas ad deleniti est,
                                    adipisci
                                    officiis
                                    maiores tempore blanditiis autem placeat debitis et rerum ullam expedita sequi corporis
                                    assumenda
                                    perspiciatis enim. Culpa consequuntur quasi consequatur blanditiis, temporibus excepturi
                                    obcaecati
                                    velit
                                    corrupti distinctio sapiente quaerat soluta, assumenda, vitae nobis aut ipsa! Ullam
                                    porro
                                    totam
                                    excepturi.
                                    Quisquam libero eligendi culpa placeat cumque sapiente exercitationem minima ipsa hic
                                    laudantium?
                                </p>
                            </textarea>

                        </div>
                    </div>



                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
                        <div class="mb-12 p-4 md:w-1/2">
                            <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
                                <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
                            </button>
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah
                                IBKWU</h3>
                            <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet
                                consectetur
                                adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non
                                reiciendis quas
                                qui?</p>
                            <div class="w-full mx-auto justify-center flex mt-5">
                                <a href="/admin/halaman/galeri/edit_produk/edit_foto"
                                    class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 mx-2">Edit</a>
                                <a href="#"
                                    class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80 mx-2">Hapus</a>
                            </div>

                        </div>
                        <div class="mb-12 p-4 md:w-1/2">
                            <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
                                <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
                            </button>
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah
                                IBKWU</h3>
                            <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet
                                consectetur
                                adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non
                                reiciendis quas
                                qui?</p>
                            <div class="w-full mx-auto justify-center flex mt-5">
                                <a href="/admin/halaman/galeri/edit_produk/edit_foto"
                                    class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 mx-2">Edit</a>
                                <a href="#"
                                    class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80 mx-2">Hapus</a>
                            </div>
                        </div>
                    </div>

                    <!--Metric Card-->

                    <button
                        class="bg-primary text-white rounded-lg p-5 hover:opacity-90 mb-10 w-full block mx-auto sm:w-96">
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

                    <div class="w-full px-4">
                        <div class="flex flex-wrap items-center justify-center">

                            <div class="flex flex-col m-3">
                                <a href="https://www.youtube.com/playlist?list=PLPWSAJrDQSajcM22LtMqVvHJ_OVIxCfcc"
                                    target="_blank"
                                    class="w-20 rounded-full flex justify-center items-center hover:text-red-600 text-slate-500 hover:animate-pulse font-extrabold">
                                    Youtube
                                    <a href="/admin/halaman/galeri/edit_produk/edit_sosmed"
                                        class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto mb-1">Edit</a>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto">Hapus</a>


                                </a>
                            </div>

                            <div class="flex flex-col m-3">
                                <a href="https://instagram.com/ibkwu" target="_blank"
                                    class="w-20 rounded-full flex justify-center items-center hover:text-pink-500 text-slate-500 hover:animate-pulse font-extrabold">
                                    Instagram
                                    <a href="/admin/halaman/galeri/edit_produk/edit_sosmed"
                                        class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto mb-1">Edit</a>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto">Hapus</a>
                                </a>
                            </div>

                            <div class="flex flex-col m-3">
                                <a href="https://twitter.com/ibkwu" target="_blank"
                                    class="w-20 rounded-full flex justify-center items-center hover:text-sky-400 text-slate-500 hover:animate-pulse font-extrabold">
                                    Twitter
                                    <a href="/admin/halaman/galeri/edit_produk/edit_sosmed"
                                        class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto mb-1">Edit</a>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto">Hapus</a>
                                </a>
                            </div>

                            <div class="flex flex-col m-3 ">
                                <a href="https://linkedin.com/in/ibkwu" target="_blank"
                                    class="w-20 rounded-full flex justify-center items-center hover:text-blue-500 text-slate-500 hover:animate-pulse font-extrabold">
                                    LinkedIn
                                    <a href="/admin/halaman/galeri/edit_produk/edit_sosmed"
                                        class="font-medium text-sm text-white bg-primary rounded-lg hover:opacity-80 text-center w-auto mb-1">Edit</a>
                                    <a href="#"
                                        class="font-medium text-sm text-white bg-red-500 rounded-lg hover:opacity-80 text-center w-auto">Hapus</a>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!--Metric Card-->

                    <button
                        class="bg-primary text-white rounded-lg p-5 hover:opacity-90 w-full sm:w-96 block mx-auto mt-4 ">
                        <a href="/admin/halaman/galeri/edit_produk/tambah_sosmed">
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