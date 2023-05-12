@extends('admin.layouts.app')

@section('title', 'Edit Beranda')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<form action="{{route('admin.halaman.beranda.update', $beranda->id)}}" method="POST" enctype="multipart/form-data">
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
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan Perubahan</h2>
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




    {{-- Slider Section Start --}}
    <section id="slider" class="pt-24">
        <div class="">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 ">

                    <!-- component -->
                    <!-- This is an example component -->
                    <div class="w-full mx-auto">

                        <div id="default-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

                                @if ($post_pengumumans->count())
                                @foreach($post_pengumumans as $post_pengumuman)
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <div
                                        class="absolute flex flex-col top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-1/2 text-center">
                                        <span
                                            class="text-2xl font-semibold text-white sm:text-3xl mb-2 truncate">{{$post_pengumuman->judul_h1}}</span>
                                        <span
                                            class="text-sm font-semibold text-white sm:text-sm truncate max-h-10">{!!$post_pengumuman->deskripsi_p1!!}</span>
                                        <a href="#"
                                            class="border-2 text-white w-min mx-auto px-3 py-1 mt-4 rounded hover:bg-white hover:bg-opacity-20">Selengkapnya</a>
                                    </div>
                                    <img src="/img/detail_blog/{{$post_pengumuman->detail_blog_img}}"
                                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                                @endforeach
                                @else
                                <p
                                    class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                                    Blog tidak tersedia.</p>
                                @endif

                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>


                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Slider Section End --}}

    {{-- Blog Section Start --}}
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="sm:container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->blog_h1}}</h4> --}}
                    <h2 class="font-bold text-dark  mb-4 text-3xl sm:text-4xl lg:text-5xl hover:text-primary">
                        <input type="text" id="pengumuman_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('pengumuman_h1') is-invalid @enderror"
                            name="pengumuman_h1" value="{{$beranda->pengumuman_h1}}" required
                            autocomplete="pengumuman_h1" autofocus>
                    </h2>
                    <hr>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->blog_p1}}</p> --}}
                </div>
            </div>

            <div class="flex flex-wrap">

                @if ($post_pengumumans->count())
                @foreach($post_pengumumans as $post_pengumuman)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="/img/detail_blog/{{$post_pengumuman->detail_blog_img}}" alt="Programming"
                            class="h-64 w-full object-cover">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-1 font-semibold text-xl text-dark hover:text-primary truncate">{{$post_pengumuman->judul_h1}}</a>
                            </h3>
                            <small class="text-slate-400">{{
                                $post_pengumuman->created_at->diffForHumans()}} |
                                {{$post_pengumuman->kategori_blog->kategori}}
                            </small>
                            <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
                                {!!$post_pengumuman->deskripsi_p1!!}</div>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                    Blog tidak tersedia.</p>
                @endif

            </div>
        </div>
    </section>
    {{-- Blog Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32 bg-white">
        <div class="sm:container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    {{-- <h4 class="font-bold uppercase text-primary text-lg mb-3">{{$beranda->about_h1}}</h4> --}}
                    <h3 class="font-semibold text-dark text-2xl sm:text-3xl lg:text-4xl mb-4 lg:pt-10">
                        <input type="text" id="ig_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('ig_h1') is-invalid @enderror"
                            name="ig_h1" value="{{$beranda->ig_h1}}" required autocomplete="ig_h1" autofocus>
                    </h3>
                    <div class="w-full px-4 aspect-video">

                        {{-- instagram embed code --}}
                        <blockquote class="instagram-media w-full" data-instgrm-captioned
                            data-instgrm-permalink="https://www.instagram.com/p/{{$beranda->link_ig}}/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                        <img src="/img/contoh_link_ig.png" alt="" class="my-3 rounded-lg">
                        <input type="text" id="link_ig"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('link_ig') is-invalid @enderror"
                            name="link_ig" value="{{$beranda->link_ig}}" required autocomplete="link_ig" autofocus
                            placeholder="Kode link instagram..">


                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl sm:text-3xl lg:text-4xl mb-4 lg:pt-10"><input
                            type="text" id="yt_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('yt_h1') is-invalid @enderror"
                            name="yt_h1" value="{{$beranda->yt_h1}}" required autocomplete="yt_h1" autofocus>
                    </h3>
                    <div class="w-full px-4 aspect-video">
                        <iframe class="w-full aspect-video"
                            src="https://www.youtube.com/embed/{{$beranda->link_yt}}"></iframe>

                        <img src="/img/contoh_link_yt.png" alt="" class="my-3 rounded-lg">
                        <input type="text" id="link_yt"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('link_yt') is-invalid @enderror"
                            name="link_yt" value="{{$beranda->link_yt}}" required autocomplete="link_yt" autofocus
                            placeholder="Kode link youtube..">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Blog Section Start --}}
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="sm:container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->blog_h1}}</h4> --}}
                    <h2 class="font-bold text-dark text-3xl sm:text-4xl lg:text-5xl mb-4 hover:text-primary"><input
                            type="text" id="berita_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('berita_h1') is-invalid @enderror"
                            name="berita_h1" value="{{$beranda->berita_h1}}" required autocomplete="berita_h1"
                            autofocus></h2>
                    <hr>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->blog_p1}}</p> --}}
                </div>
            </div>

            <div class="flex flex-wrap">

                @if ($post_beritas->count())
                @foreach($post_beritas as $post_berita)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="/img/detail_blog/{{$post_berita->detail_blog_img}}" alt="Programming"
                            class="h-64 w-full object-cover">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="{{route('blog.detail_blog', $post_berita->slug)}}"
                                    class="block mb-1 font-semibold text-xl text-dark hover:text-primary truncate">{{$post_berita->judul_h1}}</a>
                            </h3>
                            <small class="text-slate-400">{{
                                $post_berita->created_at->diffForHumans()}} |
                                {{$post_berita->kategori_blog->kategori}}
                            </small>
                            <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
                                {!!$post_berita->deskripsi_p1!!}</div>
                            <a href="{{route('blog.detail_blog', $post_berita->slug)}}"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                    Blog tidak tersedia.</p>
                @endif

            </div>
        </div>
    </section>
    {{-- Blog Section End --}}

    {{-- Hero Section Start --}}
    {{-- <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <span
                        class="block font-bold text-slate-900 text-4xl mt-1 lg:text-5xl mb-6">{{$beranda->home_h1}}</span>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">{{$beranda->home_p1}}</p>

                    <a href="/profil"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selengkapnya
                        ></a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="/img/beranda/{{$beranda->home_img1}}" alt="Dhanang Eka Putra"
                            class="relative z-10 mx-auto w-96 bg-cover">
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Hero Section End --}}

    {{-- Galeri Section Start --}}
    <section id="galeri" class="pt-36 pb-16 bg-white">
        <div class="sm:container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->galeri_h1}}</h4> --}}
                    <h3 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl hover:text-primary"><input
                            type="text" id="galeri_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('galeri_h1') is-invalid @enderror"
                            name="galeri_h1" value="{{$beranda->galeri_h1}}" required autocomplete="galeri_h1"
                            autofocus>
                    </h3>
                    <hr>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->galeri_p1}}</p> --}}
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center  xl:mx-auto">

                @if ($detail_produks->count())
                @foreach($detail_produks as $detail_produk)
                <div class=" p-4 md:w-1/3">
                    <div class="rounded-md shadow-md overflow-hidden"><a
                            href="{{route('galeri.detail_galeri', $detail_produk->slug)}}">
                            <img src="/img/detail_produk/{{$detail_produk->detail_produk_img}}" alt="macarina"
                                width="w-full" class="h-64 w-full object-cover hover:opacity-90"></a>
                    </div>
                    {{-- <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{$detail_produk->judul_h1}}</h3>
                    <small class="text-slate-400">{{
                        $detail_produk->created_at->diffForHumans()}} |
                        {{$detail_produk->kategori_galeri->kategori}}
                    </small>
                    <div class="font-medium text-base text-secondary truncate mt-2">{!!$detail_produk->deskripsi_p1!!}
                    </div> --}}
                </div>
                @endforeach
                @else
                <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                    Produk
                    tidak tersedia.</p>
                @endif

            </div>

        </div>
        <div class=" mx-auto items-center w-full text-center mt-12 mb-20">
            <a href="/galeri"
                class=" text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selengkapnya
                ></a>
        </div>
    </section>
    {{-- Galeri Section End --}}

    {{-- Mitra Section Start --}}
    {{-- <section id="mitra" class="pt-36 pb-32 bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->mitra_h1}}</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">{{$beranda->mitra_h2}}
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->mitra_p1}}</p>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">

                    @if ($mitras->count())
                    @foreach($mitras as $mitra)
                    <div class="max-w-[120px] mx-4 py-4 lg:mx-6 xl:mx-8 flex flex-col">
                        <a href="{{$mitra->mitra_link}}" target="_blank">
                            <img src="/img/mitra/{{$mitra->mitra_img}}" alt="Google"
                                class="grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                        </a>
                    </div>
                    @endforeach
                    @else
                    <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                        Mitra tidak Tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Mitra Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->kontak_h1}}</h4> --}}
                    <h3 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl"><input type="text"
                            id="lokasi_h1"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('lokasi_h1') is-invalid @enderror"
                            name="lokasi_h1" value="{{$beranda->lokasi_h1}}" required autocomplete="lokasi_h1"
                            autofocus>
                    </h3>
                    <hr>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->kontak_p1}}</p> --}}
                </div>
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.135323894769!2d113.72303419350794!3d-8.156823629789072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b6c06feea7%3A0x8014dc75ef0320b7!2sGedung%20Pasca%20Sarjana%20Politeknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1681550636653!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="items-center w-full text-center mx-auto"></iframe>


            {{-- <form>
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="nama" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="nama"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="text" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="pesan" class="text-base font-bold text-primary">Pesan</label>
                        <textarea type="text" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form> --}}
        </div>
    </section>
    {{-- Contact Section End --}}











</form>










@endsection