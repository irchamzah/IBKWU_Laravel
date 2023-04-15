@extends('home.app')

@section('title', 'Detail Blog')
@section('menu-1', 'text-dark dark:text-white')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-dark dark:text-white')
@section('menu-4', 'text-primary dark:text-primary')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16 dark:bg-dark">
  <div class="container">

    <div class="w-full px-4">

      <div class="max-w-5xl mx-auto text-center mb-6">
        <div class="w-min">
          <a href="/blog">
            <div class=" text-secondary rounded-lg p-5  w-min mb-2 border-2 bg-slate-100 hover:bg-white">
              <div class="flex flex-row items-center justify-center">
                <div class="text-center">
                  <h2 class="font-bold uppercase">Kembali</h2>
                </div>
              </div>
            </div>
          </a>
        </div>
        <h4 class="font-semibold text-lg text-primary mb-2">Detail Blog</h4>
        <h2 class="font-bold text-dark text-3xl mb-12 sm:text-4xl lg:text-5xl dark:text-white">
          {{$detail_blog->judul_h1}}</h2>
        <div class="w-full flex flex-wrap mb-5">
          <div class="w-full px-4 lg:w-1/2 aspect-video">
            <img src="/img/detail_blog/{{$detail_blog->detail_blog_img}}" alt="Programming" class="w-full">
          </div>
          <div class="w-full px-4 lg:w-1/2 aspect-video">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{$detail_blog->link_yt}}"></iframe>
          </div>
        </div>
        <small class="text-slate-400 dark:text-slate-600">{{
          $detail_blog->created_at->diffForHumans()}} |
          {{$detail_blog->kategori_blog->kategori}}
        </small>
        <div class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2 mt-10">
          {!!$detail_blog->deskripsi_p1!!}</div>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">

      @foreach($foto_blogs as $foto_blog)
      <div class="mb-12 p-4 md:w-1/2">
        <div id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/img/foto_blog/{{$foto_blog->blog_img1}}" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
          {{$foto_blog->blog_h1}}</h3>
        <p class="font-medium text-base text-secondary text-justify">{{$foto_blog->blog_p1}}
        </p>
      </div>
      @endforeach

    </div>
  </div>
</section>
{{-- Tentang Section End --}}

@endsection