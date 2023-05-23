@extends('home.app')

@section('title', 'Detail Galeri Tenant')
@section('menu-1', 'text-white')
@section('menu-2', 'text-white')
@section('menu-3', 'text-white')
@section('menu-4', 'text-white')
@section('menu-5', 'text-white bg-sky-600')
@section('menu-6', 'text-white')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto mb-6">

        <div class="shadow-md p-4">
          <div><a href="/galeri" class="text-primary hover:text-dark">Home</a> / {{$detail_produk->judul_h1}}</div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full p-4 lg:w-3/4">
            <h1 class="font-bold text-3xl my-5 text-justify">
              {{$detail_produk->judul_h1}}
            </h1>
            <hr>
            <small class="text-slate-400">{{
              $detail_produk->created_at->diffForHumans()}} |
              {{$detail_produk->kategori_galeri->kategori}}
            </small>
            <div class="font-medium text-base text-dark text-justify mt-7 mb-3">
              {!!$detail_produk->deskripsi_p1!!}
            </div>

            @foreach($foto_produks as $foto_produk)
            <div class="mb-12 w-full">
              <div id="show-modal" class="shadow-md overflow-hidden mx-auto">
                <img src="/image/foto_produk/{{$foto_produk->produk_img1}}" alt="" width="w-full">
              </div>
              <h3 class="font-semibold text-sm text-dark mt-5 mb-3 text-center">
                {{$foto_produk->produk_h1}}</h3>
              <div class="font-medium text-base text-dark text-justify">{!!$foto_produk->produk_p1!!}
              </div>
            </div>
            @endforeach

            <hr class="mt-5">
          </div>

          <div class="w-full p-4 lg:w-1/4">
            <div class="">

              <h1 class="text-base mb-4 mt-7">Video Produk :</h1>
              <div class="w-full mb-10">
                <iframe class="" src="https://www.youtube.com/embed/{{$detail_produk->link_yt}}"></iframe>
              </div>

              <h1 class="text-base mb-4">Kontak Pemilik:</h1>
              <div class="mb-10">
                @foreach($sosmeds as $sosmed)
                <a href="{{$sosmed->link_sosmed}}" target="_blank" class="">
                  <div
                    class="bg-{{$sosmed->warna->nama_warna}}-600 text-white p-2 text-center w-full hover:bg-{{$sosmed->warna->nama_warna}}-700 my-2">

                    {{$sosmed->nama_sosmed}}
                  </div>
                </a>
                @endforeach
              </div>

              <h1 class="text-base mb-4 mt-7">Instagram :</h1>
              <div class="mb-10">
                {{-- instagram embed code --}}
                <blockquote class="instagram-media w-full" data-instgrm-captioned
                  data-instgrm-permalink="https://www.instagram.com/p/{{$detail_produk->link_ig}}/?utm_source=ig_embed&amp;utm_campaign=loading"
                  data-instgrm-version="14"
                  style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
{{-- Tentang Section End --}}


@endsection