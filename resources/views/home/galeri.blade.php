@extends('home.app')

@section('title', 'Galeri Tenant')
@section('menu-1', 'text-white')
@section('menu-2', 'text-white')
@section('menu-3', 'text-white')
@section('menu-4', 'text-white')
@section('menu-5', 'text-white bg-sky-600')
@section('menu-6', 'text-white')
@section('content')

<form id="searchForm" action="{{ route('galeri.search')}}" method="GET">
  @csrf
</form>

<form id="filterForm" action="{{ route('galeri.filter')}}" method="GET">
  @csrf
</form>

{{-- Rekomendasi Tenant Section Start --}}
{{-- <section id="home" class="pt-36 pb-10 dark:bg-dark">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        <h2 class="animate-bounce font-bold text-dark mb-5 text-3xl sm:text-4xl"><span
            class="bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text">{{$galeri->sorotan_h1}}</span>
        </h2>
        <hr>
      </div>
    </div>

    <div class="flex flex-wrap">

      @if ($rekomendasiGaleris->count())
      @foreach($rekomendasiGaleris as $rekomendasiGaleri)
      <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
        <div class="bg-white shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
          <img src="/image/detail_produk/{{$rekomendasiGaleri->detail_produk_img}}"
            alt="{{$rekomendasiGaleri->detail_produk_img}}" class="h-64 w-full object-cover">
          <div class="py-8 px-6">
            <h3>
              <a href="{{route('galeri.detail_galeri', $rekomendasiGaleri->slug)}}"
                class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate">{{$rekomendasiGaleri->judul_h1}}</a>
            </h3>
            <small class="text-slate-400 dark:text-slate-600">{{
              $rekomendasiGaleri->created_at->diffForHumans()}} |
              {{$rekomendasiGaleri->kategori_galeri->kategori}}
            </small>
            <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
              {!!$rekomendasiGaleri->deskripsi_p1!!}
            </div>
            <a href="{{route('galeri.detail_galeri', $rekomendasiGaleri->slug)}}"
              class="font-medium text-sm text-white bg-primary py-2 px-4 hover:bg-sky-600">Baca
              Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
        Belum ada produk yang disorot</p>
      @endif

    </div>

    <div class="w-full sm:w-96 mx-auto">
      <div class="mt-4">
        {{ $rekomendasiGaleris->links() }}
      </div>
    </div>

  </div>
</section> --}}
{{-- Rekomendasi Tenant Section End --}}

{{-- Galeri Tenant Section Start --}}
<section id="tenant" class="pt-36 pb-10 bg-slate-100 dark:bg-slate-800">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$galeri->galeri_h1}}</h4> --}}
        <h2 class="font-bold text-dark mb-5 text-3xl sm:text-4xl">{{$galeri->galeri_h1}}
        </h2>
        <hr>
        {{-- <div class="font-medium text-md text-secondary md:text-lg">{{$galeri->galeri_p1}}</div> --}}
      </div>

      <div class="justify-center">
        <div class="flex justify-center mx-auto">
          <div class="mt-5 w-full sm:w-96">
            <div class="relative mb-4 flex w-full flex-wrap items-stretch">
              <input form="searchForm" name="query" type="text"
                class="bg-white dark:bg-slate-600 dark:border-neutral-700 relative m-0 -mr-px block w-[1%] min-w-0 flex-auto border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                placeholder="Cari Produk" aria-label="Search" aria-describedby="searchForm" />
              <button form="searchForm"
                class="relative z-[2] flex items-center bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-sky-600 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                type="submit" id="searchForm" data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                  <path fill-rule="evenodd"
                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        {{-- Pilih Kategori --}}
        <div class="flex justify-center mx-auto">
          <div class=" w-full sm:w-96">
            <div class="relative mb-16 flex w-full flex-wrap items-stretch">
              <select name="kategori"
                class="bg-white dark:bg-slate-600 dark:border-neutral-700 relative m-0 -mr-px block w-[1%] min-w-0 flex-auto border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                form="filterForm">
                <option value="">Pilih Kategori</option>
                @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ old('kategori')==$kategori->id ?
                  'selected' : '' }}>
                  {{ $kategori->kategori }}
                </option>
                @endforeach
              </select>
              <button type="submit" form="filterForm"
                class="relative z-[2] flex items-center bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-sky-600 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg">
                Filter
              </button>
            </div>
          </div>
        </div>
      </div>


      <div class="flex flex-wrap">


        @if ($detail_produks->count())
        @foreach($detail_produks as $detail_produk)
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white shadow-lg overflow-hidden mb-10 dark:bg-slate-900">
            <img src="/image/detail_produk/{{$detail_produk->detail_produk_img}}"
              alt="{{$detail_produk->detail_produk_img}}" class="h-64 w-full object-cover">
            <div class="py-8 px-6">
              <h3>
                <a href="{{route('galeri.detail_galeri', $detail_produk->slug)}}"
                  class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate">{{$detail_produk->judul_h1}}</a>
              </h3>
              <small class="text-slate-400 dark:text-slate-600">{{
                $detail_produk->created_at->diffForHumans()}} |
                {{$detail_produk->kategori_galeri->kategori}}
              </small>
              <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
                {!!$detail_produk->deskripsi_p1!!}
              </div>
              <a href="{{route('galeri.detail_galeri', $detail_produk->slug)}}"
                class="font-medium text-sm text-white bg-primary py-2 px-4 hover:bg-sky-600">Baca
                Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
          Produk
          tidak tersedia.</p>
        @endif
      </div>

      <div class="w-full sm:w-96 mx-auto">
        <div class="mt-4">
          {{ $detail_produks->links() }}
        </div>
      </div>


    </div>
  </div>
</section>
{{-- Galeri Tenant Section End --}}

@endsection