@extends('home.app')

@section('title', 'Blog')
@section('menu-1', 'text-dark dark:text-white')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-dark dark:text-white')
@section('menu-4', 'text-primary dark:text-primary')
@section('content')
<form id="searchForm" action="{{ route('blog.search')}}" method="GET">
  @csrf
</form>

<form id="filterForm" action="{{ route('blog.filter')}}" method="GET">
  @csrf
</form>

{{-- Rekomendasi Tenant Section Start --}}
<section id="home" class="pt-36 pb-32 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="animate-bounce font-semibold text-lg text-primary mb-2">{{$blog->sorotan_h1}}</h4>
        <h2 class="animate-bounce font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white"><span
            class="bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text">{{$blog->sorotan_h2}}</span>
        </h2>
        <div class="font-medium text-md text-secondary md:text-lg">
          {{$blog->sorotan_p1}}
        </div>
      </div>

    </div>

    <div class="flex flex-wrap">

      @if ($rekomendasiblogs->count())
      @foreach($rekomendasiblogs as $rekomendasiblog)
      <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
          <img src="/img/detail_blog/{{$rekomendasiblog->detail_blog_img}}" alt="Programming"
            class="h-64 w-full object-cover">
          <div class="py-8 px-6">
            <h3>
              <a href="{{route('blog.detail_blog', $rekomendasiblog->id)}}"
                class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">{{$rekomendasiblog->judul_h1}}</a>
            </h3>
            <small class="text-slate-400 dark:text-slate-600">{{
              $rekomendasiblog->created_at->diffForHumans()}} |
              {{$rekomendasiblog->kategori_blog->kategori}}
            </small>
            <div class="font-medium text-base text-secondary mb-6 truncate mt-2">{!!$rekomendasiblog->deskripsi_p1!!}
            </div>
            <a href="{{route('blog.detail_blog', $rekomendasiblog->id)}}"
              class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
              Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
        blog
        tidak tersedia.</p>
      @endif
    </div>

    <div class="w-full sm:w-96 mx-auto">
      <div class="mt-4">
        {{ $rekomendasiblogs->links() }}
      </div>
    </div>

  </div>
</section>
{{-- Rekomendasi Tenant Section End --}}

{{-- blog Tenant Section Start --}}
<section id="tenant" class="pt-36 pb-32 bg-slate-100 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-10">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$blog->blog_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">{{$blog->blog_h2}}
        </h2>
        <div class="font-medium text-md text-secondary md:text-lg">{{$blog->blog_p1}}</div>
      </div>

      <div class="justify-center">
        <div class="flex justify-center mx-auto">
          <div class="mt-5 w-full sm:w-96">
            <div class="relative mb-4 flex w-full flex-wrap items-stretch">
              <input form="searchForm" name="query" type="text"
                class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                placeholder="Cari blog" aria-label="Search" aria-describedby="searchForm" />
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

        {{-- Pilih Kategori --}}
        <div class="flex justify-center mx-auto">
          <div class="mb-10 w-full sm:w-96">
            <div class="relative mb-4 flex w-full flex-wrap items-stretch">
              <select name="kategori"
                class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
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


      <div class="flex flex-wrap">


        @if ($detail_blogs->count())
        @foreach($detail_blogs as $detail_blog)
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
            <img src="/img/detail_blog/{{$detail_blog->detail_blog_img}}" alt="Programming"
              class="h-64 w-full object-cover">
            <div class="py-8 px-6">
              <h3>
                <a href="{{route('blog.detail_blog', $detail_blog->id)}}"
                  class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">{{$detail_blog->judul_h1}}</a>
              </h3>
              <small class="text-slate-400 dark:text-slate-600">{{
                $detail_blog->created_at->diffForHumans()}} |
                {{$detail_blog->kategori_blog->kategori}}
              </small>
              <div class="font-medium text-base text-secondary mb-6 truncate mt-2">{!!$detail_blog->deskripsi_p1!!}
              </div>
              <a href="{{route('blog.detail_blog', $detail_blog->id)}}"
                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
          blog
          tidak tersedia.</p>
        @endif
      </div>

      <div class="w-full sm:w-96 mx-auto">
        <div class="mt-4">
          {{ $detail_blogs->links() }}
        </div>
      </div>


    </div>
  </div>
</section>
{{-- blog Tenant Section End --}}

@endsection