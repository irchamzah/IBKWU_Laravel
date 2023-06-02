@extends('home.app')

@section('title', 'Detail Blog')
@section('menu-1', 'text-white')
@section('menu-2', 'text-white')
@section('menu-3', 'text-white')
@section('menu-4', 'text-white')
@section('menu-5', 'text-white')
@section('menu-6', 'text-white bg-sky-600')
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
            <h1 class="font-bold text-3xl text-dark my-5">
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
              <div id="show-modal" class="shadow-md overflow-hidden mx-auto">
                <img src="/image/foto_blog/{{$foto_blog->blog_img1}}" alt="" width="w-full">
              </div>
              <div class="font-semibold text-sm text-dark mt-5 mb-3 text-center">
                {{$foto_blog->blog_h1}}</div>
              <div class="font-medium text-base text-dark text-justify">{!!$foto_blog->blog_p1!!}
              </div>
            </div>
            @endforeach

            <hr class="my-5">

            <h1 class="text-base mb-4 mt-7 font-semibold">Komentar :</h1>
            @foreach($komen_blogs as $komen_blog)
            <div class="bg-slate-100 p-4 shadow rounded-full mb-4 flex rounded-tl-none">
              <div class="h-10 w-10 items-center justify-center my-auto mr-5 rounded-full  bg-slate-500">
                <svg class="w-6 h-6 text-white my-auto mx-auto text-center justify-center mt-1" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM12 14c3.866 0 7 3.134 7 7v1a1 1 0 01-1 1H6a1 1 0 01-1-1v-1c0-3.866 3.134-7 7-7z" />
                </svg>

              </div>
              <div class="">
                <h3 class="text-lg font-semibold mb-2">{{ $komen_blog->nama_user }}</h3>
                <p class="text-gray-600">{{ $komen_blog->komen_user}}</p>
                <span class="text-gray-400 text-sm">{{ $komen_blog->created_at->diffForHumans() }}</span>
                <div class="text-red-400 text-sm w-full mt-3"><a
                    href="{{route('blog.detail_blog.komen.komen_blog_delete', $komen_blog->id, $komen_blog->blog_id)}}"><small
                      class="">Hapus Komentar</small></a>
                </div>
              </div>
            </div>
            @endforeach


            <!--Metric Card-->
            <div class="bg-slate-100 p-4 shadow rounded-3xl mb-4 flex rounded-tl-none">
              <form action="{{route('blog.detail_blog.komen.komen_blog_store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <input type="text" name="id" value="{{$detail_blog->id}}" hidden>
                <div class="form-group">
                  <label for="nama_user">Nama Pengguna</label><br>
                  @error('nama_user')
                  <small style="color: red">{{$message}}</small>
                  @enderror
                  <input type="text" id="nama_user"
                    class="block border border-grey-light w-full p-3  mb-4 @error('nama_user') is-invalid @enderror"
                    name="nama_user" value="{{ old('nama_user') }}" required autocomplete="nama_user" autofocus>
                </div>

                <div class="form-group">
                  <label for="komen_user">Komentar</label><br>
                  @error('komen_user')
                  <small style="color: red">{{$message}}</small>
                  @enderror
                  <input type="text" id="komen_user"
                    class="block border border-grey-light w-full p-3  mb-4 @error('komen_user') is-invalid @enderror"
                    name="komen_user" value="{{ old('komen_user') }}" required autocomplete="komen_user" autofocus>
                </div>
                <div class="flex mx-auto w-full items-center justify-center"><a
                    href="{{route('blog.detail_blog', $detail_blog->slug)}}">
                    <div
                      class="bg-slate-500 text-white hover:opacity-90 text-center -lg py-4 px-6 w-min whitespace-nowrap font-semibold my-10 flex-row mr-2">
                      Batalkan Komentar
                    </div>
                  </a>
                  <button>
                    <div
                      class="bg-green-600 text-white hover:opacity-90 text-center -lg py-4 px-6 w-min whitespace-nowrap font-semibold my-10 flex-row ml-2">
                      Tambahkan Komentar
                    </div>
                  </button>
                </div>
              </form>
            </div>
            <!--/Metric Card-->

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
                        class="bg-white dark:bg-slate-600 dark:border-neutral-700 relative m-0 -mr-px block w-[1%] min-w-0 flex-auto border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                        placeholder="Cari Post" aria-label="Search" aria-describedby="searchForm" />
                      <button form="searchForm"
                        class="relative z-[2] flex items-center bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-sky-600 focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
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
                        class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto border border-solid border-neutral-300  bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
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
                        class="relative z-[2] flex items-center bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-sky-600 focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg">
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

{{-- blog Tenant Section Start --}}
<section id="tenant" class="pt-10 pb-10 bg-slate-100 dark:bg-slate-800">
  <div class="sm:container">
    <div class="w-full px-4">

      <div class="max-w-xl mx-auto text-center mb-5">
        <h2 class="font-bold text-dark mb-5 text-3xl sm:text-4xl">POST LAINNYA
        </h2>
        <hr class="mb-10">
      </div>

      <div class="flex flex-wrap">

        @if ($detail_blogs->count())
        @foreach($detail_blogs as $detail_blog)
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white shadow-lg overflow-hidden mb-10">
            <img src="/image/detail_blog/{{$detail_blog->detail_blog_img}}" alt="Programming"
              class="h-64 w-full object-cover">
            <div class="py-8 px-6">
              <h3>
                <a href="{{route('blog.detail_blog', $detail_blog->slug)}}"
                  class="block mb-1 font-semibold text-xl text-dark hover:text-primary truncate">{{$detail_blog->judul_h1}}</a>
              </h3>
              <small class="text-slate-400">{{
                $detail_blog->created_at->diffForHumans()}} |
                {{$detail_blog->kategori_blog->kategori}}
              </small>
              <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
                {!!$detail_blog->deskripsi_p1!!}
              </div>
              <a href="{{route('blog.detail_blog', $detail_blog->slug)}}"
                class="font-medium text-sm text-white bg-primary py-2 px-4 hover:bg-sky-600">Baca
                Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
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