@extends('admin.layouts.app')

@section('title', 'Edit Blog')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">

        <!--Metric Card-->
        <a href="/admin/halaman">
            <button class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Kembali</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->

        <!--Metric Card-->
        <a href="/admin/halaman">
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan Perubahan</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->
    </div>
</div>

<div class="flex flex-wrap">
    <div class="w-full p-6">
        <div class=" rounded-lg shadow-xl p-5">

            {{-- Rekomendasi Blog Section Start --}}
            <section id="home" class="pt-36 pb-32 dark:bg-dark">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h4 class="animate-bounce font-semibold text-lg text-primary mb-2">Sorotan Blog</h4>
                            <h2
                                class="animate-bounce font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                <span
                                    class="bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text">Rekomendasi
                                    Blog</span>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                Berikut adalah blog yang direkomendasikan.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                                <img src="https://source.unsplash.com/360x200?programming" alt="Programming"
                                    class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Tips
                                            Belajar Programming</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing
                                        elit. Explicabo, harum!</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                                <img src="https://source.unsplash.com/360x200?mechanical+keyboard"
                                    alt="Mechanical Keyboard" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Review
                                            Keyboard GMMK Pro</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem, ipsum dolor sit amet
                                        consectetur adipisicing
                                        elit. Commodi minima quisquam quos?</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800">
                                <img src="https://source.unsplash.com/360x200?coffe" alt="Programming" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Menikmati
                                            Secangkir Kopi</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing
                                        elit. Dicta minus enim voluptates rem sint eius iusto.</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Rekomendasi Blog Section End --}}

            {{-- Blog Section Start --}}
            <section id="blog" class="pt-36 pb-32 bg-slate-200 dark:bg-slate-800">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-10">
                            <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Blog
                                yang Tersedia</h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minus cupiditate sed
                                dolorem.
                            </p>
                        </div>
                    </div>

                    <div class="justify-center">
                        <div class="flex justify-center mx-auto">
                            <div class="mb-3 xl:w-96">
                                <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                                    <input type="search"
                                        class="bg-white relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                        placeholder="Cari Judul Blog" aria-label="Search"
                                        aria-describedby="button-addon1" />
                                    <button
                                        class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-opacity-80 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                                        type="button" id="button-addon1" data-te-ripple-init
                                        data-te-ripple-color="light">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Pilih Kategori --}}
                        <div class="flex justify-center mx-auto mb-10">
                            <div class="mb-3 xl:w-96">
                                <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                                    <button id="kategoriGaleri" name="kategoriGaleri"
                                        data-dropdown-toggle="navMenuGaleri"
                                        class="text-white bg-primary hover:bg-opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800 mx-auto group"
                                        type="button">
                                        Pilih Kategori
                                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" class="">
                                            </path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="navMenuGaleri"
                                        class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-full dark:bg-gray-700 top-12 text-center">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                    out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                <img src="https://source.unsplash.com/360x200?programming" alt="Programming"
                                    class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Tips
                                            Belajar Programming</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet
                                        consectetur adipisicing
                                        elit. Explicabo, harum!</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                <img src="https://source.unsplash.com/360x200?mechanical+keyboard"
                                    alt="Mechanical Keyboard" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Review
                                            Keyboard GMMK Pro</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem, ipsum dolor sit amet
                                        consectetur adipisicing
                                        elit. Commodi minima quisquam quos?</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-dark">
                                <img src="https://source.unsplash.com/360x200?coffe" alt="Programming" class="w-full">
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/detail_blog"
                                            class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">Menikmati
                                            Secangkir Kopi</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing
                                        elit. Dicta minus enim voluptates rem sint eius iusto.</p>
                                    <a href="/blog/detail_blog"
                                        class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Blog Section End --}}

        </div>
    </div>
</div>
@endsection