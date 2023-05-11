@extends('home.app')

@section('title', 'Profil')
@section('menu-1', 'text-dark')
@section('menu-2', 'text-primary')
@section('menu-3', 'text-dark')
@section('menu-4', 'text-dark')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16 dark:bg-dark">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto mb-6">
        <h4 class="font-semibold text-lg text-primary mb-2 text-center">{{$profil->tentang_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl text-center">
          {{$profil->tentang_h2}}
        </h2>
        <hr>
        <div class="font-medium text-md  md:text-lg text-justify mb-2 mt-10">
          {!!$profil->tentang_p1!!}
        </div>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/img/profil/{{$profil->tentang_img1}}" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 text-center">{{$profil->tentang_h3}}</h3>
        <div class="font-medium text-base  text-justify">{{$profil->tentang_p2}}</div>
      </div>
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/img/profil/{{$profil->tentang_img2}}" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 text-center">{{$profil->tentang_h4}}</h3>
        <div class="font-medium text-base  text-justify">{{$profil->tentang_p3}}</div>
      </div>
    </div>
  </div>
</section>
{{-- Tentang Section End --}}

{{-- Visi dan Misi Section Start --}}
<section id="visi" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="sm:container">
    <div class="">
      <div class="w-full px-4">
        <div class="max-w-5xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-lg text-primary mb-2">{{$profil->visi_h1}}</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">{{$profil->visi_h2}}
          </h2>
          <hr>
          <p class="font-medium text-md  md:text-lg">{{$profil->visi_p1}}</p>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2">
          <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
            {{$profil->visi_h3}}</h2>
          <div class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
            {!!$profil->visi_p2!!}</div>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
            {{$profil->visi_h4}}</h2>
          <div class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
            {!!$profil->visi_p3!!}</div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Visi dan Misi Section End --}}

{{-- Tujuan dan Sasaran Section Start --}}
<section id="tujuan" class="pt-36 pb-16 dark:bg-dark">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto text-center mb-10">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$profil->tujuan_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">{{$profil->tujuan_h2}}
        </h2>
        <hr>
        <p class="font-medium text-md  md:text-lg">{{$profil->tujuan_p1}}</p>
      </div>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full px-4 lg:w-1/2">
        <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
          {{$profil->tujuan_h3}}</h2>
        <ul class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
          {!!$profil->tujuan_p2!!}</ul>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 text-center">
          {{$profil->tujuan_h4}}</h2>
        <ul class="list-disc font-medium text-base  mb-6 lg:text-lg lg:pl-6 text-justify">
          {!!$profil->tujuan_p3!!}</ul>
      </div>
    </div>
  </div>
</section>
{{-- Tujuan dan Sasaran Section End --}}

{{-- Struktur Kepengurusan Section Start --}}
<section id="struktur" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto text-center mb-10">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$profil->struktur_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">{{$profil->struktur_h2}}
        </h2>
        <hr>
        <div class="font-medium text-md  md:text-lg">{{$profil->struktur_p1}}</div>
        <div class="font-medium text-md  md:text-lg text-justify mb-2 mt-16">{!!$profil->struktur_p2!!}
        </div>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
      <div class="mb-12 p-4">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/img/profil/{{$profil->struktur_img1}}" alt="" width="w-full">
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Struktur Kepengurusan Section End --}}

@endsection