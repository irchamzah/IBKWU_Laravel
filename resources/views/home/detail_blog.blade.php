@extends('home.app')

@section('title', 'Detail Blog')
@section('menu-1', 'text-dark')
@section('menu-2', 'text-dark')
@section('menu-3', 'text-dark')
@section('menu-31', 'text-dark')
@section('menu-32', 'text-dark')
@section('menu-33', 'text-dark')
@section('menu-34', 'text-dark')
@section('menu-4', 'text-dark')
@section('menu-5', 'text-dark')
@section('menu-6', 'text-dark')
@section('menu-7', 'text-primary')
@section('content')

<form id="searchForm" action="{{ route('blog.search')}}" method="GET">
  @csrf
</form>

<form id="filterForm" action="{{ route('blog.filter')}}" method="GET">
  @csrf
</form>

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto mb-6">

        <div class="shadow-md p-4">
          <div><a href="/blog" class="text-primary hover:text-dark">Home</a> / {{$detail_blog->judul_h1}}</div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full p-4 lg:w-3/4">
            <h1 class="font-bold text-3xl text-dark my-5 text-justify">
              {{$detail_blog->judul_h1}}
            </h1>
            <hr>
            <small class="text-slate-400">{{
              $detail_blog->created_at->diffForHumans()}} |
              {{$detail_blog->kategori_blog->kategori}}
            </small>
            <div class="font-medium text-base text-dark text-justify mt-7 mb-3">
              {!!$detail_blog->deskripsi_p1!!}
            </div>

            @foreach($foto_blogs as $foto_blog)
            <div class="mb-12 w-full">
              <div id="show-modal" class="rounded-md shadow-md overflow-hidden mx-auto">
                <img src="/img/foto_blog/{{$foto_blog->blog_img1}}" alt="" width="w-full">
              </div>
              <div class="font-semibold text-sm text-dark mt-5 mb-3 text-center">
                {{$foto_blog->blog_h1}}</div>
              <div class="font-medium text-base text-dark text-justify">{!!$foto_blog->blog_p1!!}
              </div>
            </div>
            @endforeach

            <hr class="mt-5">
          </div>

          <div class="w-full p-4 lg:w-1/4">
            <div class="">

              <h1 class="text-base mb-4 mt-7">Video :</h1>
              <div class="w-full mb-10">
                <iframe class="" src="https://www.youtube.com/embed/{{$detail_blog->link_yt}}"></iframe>
              </div>

              <h1 class="text-base mb-4 mt-7">Kategori Post :</h1>
              <div class="mb-10">
                @foreach ($kategoriss as $category)
                <p class="">{{
                  $category->kategori }} ({{
                  $category->total }})</p>
                @endforeach
              </div>

              <div class="justify-center">
                <div class="flex justify-center mx-auto">
                  <div class="mt-5 w-full sm:w-96">
                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                      <input form="searchForm" name="query" type="text"
                        class="bg-white dark:bg-slate-600 dark:border-neutral-700 relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                        placeholder="Cari post" aria-label="Search" aria-describedby="searchForm" />
                      <button form="searchForm"
                        class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
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

                <div class="flex justify-center mx-auto">
                  <div class=" w-full sm:w-96">
                    <div class="relative mb-16 flex w-full flex-wrap items-stretch">
                      <select name="kategori"
                        class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300  bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
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
                        class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg">
                        Filter
                      </button>
                    </div>
                  </div>
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