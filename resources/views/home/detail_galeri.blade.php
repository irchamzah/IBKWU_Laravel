@extends('home.app')

@section('title', 'Detail Galeri Tenant')
@section('menu-1', 'text-dark dark:text-white')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-primary dark:text-primary')
@section('menu-4', 'text-dark dark:text-white')
@section('content')


{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16 dark:bg-dark">
  <div class="container">

    <div class="w-full px-4">

      <div class="max-w-5xl mx-auto text-center mb-6">
        <div class="w-min">
          <a href="/galeri">
            <div
              class=" text-secondary rounded-lg p-5  w-min mb-2 border-2 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 dark:hover:bg-slate-700 hover:bg-white">
              <div class="flex flex-row items-center justify-center">
                <div class="text-center">
                  <h2 class="font-bold uppercase">Kembali</h2>
                </div>
              </div>
            </div>
          </a>
        </div>
        <h4 class="font-semibold text-lg text-primary mb-2">Detail Produk</h4>
        <h2 class="font-bold text-dark text-3xl mb-12 sm:text-4xl lg:text-5xl dark:text-white">
          {{$detail_produk->judul_h1}}</h2>
        <div class="w-full flex flex-wrap mb-5">
          <div class="w-full px-4 lg:w-1/2 aspect-video">
            <img src="/img/detail_produk/{{$detail_produk->detail_produk_img}}" alt="Programming" class="w-full">
          </div>
          <div class="w-full px-4 lg:w-1/2 aspect-video">
            <iframe class="w-full aspect-video"
              src="https://www.youtube.com/embed/{{$detail_produk->link_yt}}"></iframe>
          </div>
        </div>
        <small class="text-slate-400 dark:text-slate-600">{{
          $detail_produk->created_at->diffForHumans()}} |
          {{$detail_produk->kategori_galeri->kategori}}
        </small>
        <div class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2 mt-10">
          {!!$detail_produk->deskripsi_p1!!}</div>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">

      @foreach($foto_produks as $foto_produk)
      <div class="mb-12 p-4 md:w-1/2">
        <div id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/img/foto_produk/{{$foto_produk->produk_img1}}" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
          {{$foto_produk->produk_h1}}</h3>
        <p class="font-medium text-base text-secondary text-justify">{{$foto_produk->produk_p1}}
        </p>
      </div>
      @endforeach

    </div>
  </div>
</section>
{{-- Tentang Section End --}}

{{-- Visi dan Misi Section Start --}}
<section id="visi" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto text-center">
        <h4 class="font-semibold text-lg text-primary mb-2">Hubungi Kami</h4>
        <h2 class="font-bold text-dark text-3xl sm:text-4xl lg:text-5xl dark:text-white">Sosial Media Kami</h2>
      </div>
    </div>

    <div class="w-full px-4">
      <div class="flex flex-wrap items-center justify-center capitalize">

        @foreach($sosmeds as $sosmed)
        <div class="flex flex-col m-3 mt-20">
          <a href="{{$sosmed->link_sosmed}}" target="_blank"
            class="w-20 rounded-full flex justify-center items-center hover:text-{{$sosmed->warna->nama_warna}}-600 text-slate-500 hover:animate-pulse font-extrabold">
            {{$sosmed->nama_sosmed}}
          </a>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</section>
{{-- Visi dan Misi Section End --}}

@endsection