@extends('admin.layouts.app')

@section('title', 'Edit blog Tenant')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')
<div class="justify-center">




    <form id="saveForm" action="{{route('admin.halaman.blog.update', $blog->id)}}" method="POST"
        enctype="multipart/form-data">
        @csrf
    </form>

    <form id="searchForm" action="{{ route('admin.halaman.blog.search')}}" method="GET">
        @csrf
    </form>

    <form id="filterForm" action="{{ route('admin.halaman.blog.filter')}}" method="GET">
        @csrf
    </form>

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


            <button type="submit" name="save" value="Save" form="saveForm"
                class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700" method="POST">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase"><input type="submit" name="save" value="SIMPAN"
                                form="saveForm" />
                        </h2>
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

    <div class="flex flex-wrap">
        <div class="w-full p-6">
            <div class=" rounded-lg shadow-xl p-5">

                {{-- Rekomendasi Tenant Section Start --}}
                <section id="home" class="pt-36 pb-32 dark:bg-dark bg-white">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="max-w-xl mx-auto text-center mb-16">
                                <h2
                                    class="animate-bounce font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                    <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-dark bg-clip-text">
                                        <input form="saveForm" type="text" id="sorotan_h1"
                                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('sorotan_h1') is-invalid @enderror"
                                            name="sorotan_h1" value="{{$blog->sorotan_h1}}" required
                                            autocomplete="sorotan_h1" autofocus></span>
                                </h2>
                                <hr>
                            </div>
                        </div>


                        <div class="flex flex-wrap">

                            @if ($rekomendasiBlogs->count())
                            @foreach($rekomendasiBlogs as $rekomendasiblog)
                            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                                    <img src="/img/detail_blog/{{$rekomendasiblog->detail_blog_img}}" alt="Programming"
                                        class="h-64 w-full object-cover">
                                    <div class="py-8 px-6">
                                        <h3>
                                            <a href="{{route('admin.halaman.blog.edit_blog', $rekomendasiblog->id)}}"
                                                class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate">{{$rekomendasiblog->judul_h1}}</a>
                                        </h3>
                                        <small class="text-slate-400 dark:text-slate-600">{{
                                            $rekomendasiblog->created_at->diffForHumans()}} |
                                            {{$rekomendasiblog->kategori_blog->kategori}}
                                        </small>
                                        <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
                                            {!!$rekomendasiblog->deskripsi_p1!!}
                                        </div>
                                        <a href="{{route('admin.halaman.blog.edit_blog', $rekomendasiblog->id)}}"
                                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Edit</a>
                                        <a href="{{route('admin.halaman.blog.delete_blog', $rekomendasiblog->id)}}"
                                            class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p
                                class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                                Belum ada blog yang disorot</p>
                            @endif

                        </div>

                        <div class="w-full sm:w-96 mx-auto">
                            <div class="mt-4">
                                {{ $rekomendasiBlogs->links() }}
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
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                    <input form="saveForm" type="text" id="blog_h1"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('blog_h1') is-invalid @enderror"
                                        name="blog_h1" value="{{$blog->blog_h1}}" required autocomplete="blog_h1"
                                        autofocus>
                                </h2>
                                <hr>
                            </div>

                            <div class="flex justify-center mx-auto">
                                <div class="mt-5 w-full sm:w-96">
                                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                                        <input form="searchForm" name="query" type="text"
                                            class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                            placeholder="Cari blog" aria-label="Search" aria-describedby="searchForm" />
                                        <button form="searchForm"
                                            class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                                            type="submit" id="searchForm" data-te-ripple-init
                                            data-te-ripple-color="light">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-5 w-5">
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
                                        <a href="{{route('admin.halaman.blog.show_kategori')}}"
                                            class=" flex items-center rounded bg-secondary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg ml-1">Edit</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="flex flex-wrap">
                            @if ($detail_blogs->count())
                            @foreach($detail_blogs as $detail_blog)
                            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                <div class="bg-white rounded shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                    <img src="/img/detail_blog/{{$detail_blog->detail_blog_img}}" alt="Gambar"
                                        class="h-64 w-full object-cover">
                                    <div class="py-8 px-6">
                                        <h3>
                                            <a href="{{route('admin.halaman.blog.edit_blog', $detail_blog->id)}}"
                                                class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">{{$detail_blog->judul_h1}}</a>
                                        </h3>
                                        <div
                                            class="font-medium text-base text-secondary mb-6 truncate hover:text-clip max-h-20">
                                            {!!$detail_blog->deskripsi_p1!!}</div>
                                        <a href="{{route('admin.halaman.blog.edit_blog', $detail_blog->id)}}"
                                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Edit</a>
                                        <a href="{{route('admin.halaman.blog.delete_blog', $detail_blog->id)}}"
                                            class="font-medium text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p
                                class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                                blog
                                tidak tersedia.</p>
                            @endif
                        </div>

                        <div class="w-full sm:w-96 mx-auto">
                            <div class="mt-4">
                                {{ $detail_blogs->links() }}
                            </div>
                        </div>

                        <!--Metric Card-->
                        <div class="w-min mx-auto">
                            <a href="/admin/halaman/blog/tambah_blog">
                                <div
                                    class="bg-primary text-white rounded-lg p-5 hover:opacity-90 mt-10  block mx-auto w-full sm:w-96">
                                    <div class="flex flex-row items-center justify-center">
                                        <div class="text-center">
                                            <h2 class="font-bold uppercase">Tambah blog Baru</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </section>
                {{-- blog Tenant Section End --}}

            </div>
        </div>
    </div>

    @endsection