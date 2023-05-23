<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- #0093d3 --}}
    {{-- logo title bar --}}
    <link rel="icon" href="/img/logo_IBKWU.png" type="image/x-icon">

    <title>IBKWU - Inkubator Bisnis dan Kewirausahaan</title>

</head>

<body class="font-opensans">
    {{-- Header Start --}}
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10 navbar-fixed">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="/" class="font-bold text-lg text-white block py-6 px-4">IBKWU</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute shadow-2xl  bg-primary max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:dark:bg-transparent dark:bg-dark dark:shadow-slate-500">
                        <ul class="block lg:flex">
                            <li class="group @yield('menu-1') ">
                                <a href="/" class="text-base  py-6 px-4 flex group-hover:bg-sky-600">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/profil"
                                    class="text-base @yield('menu-2') py-6 px-4 flex group-hover:bg-sky-600">Profil</a>
                            </li>
                            <li class="group">
                                <a href="/layanan" id="layanan_dropdown" name="layanan_dropdown"
                                    class="text-base @yield('menu-3') py-6 px-4 flex group-hover:bg-sky-600">
                                    Layanan
                                    {{-- <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 14l6-6H4z" />
                                    </svg> --}}
                                </a>

                                {{-- <ul class="hidden absolute bg-white border-2 shadow-lg py-5 mt-1"
                                    id="layanan_menu">
                                    <li class="group"><a href=""
                                            class="text-base @yield('menu-31') py-6 px-4 flex hover:bg-sky-600">Layanan
                                            Pra-Startup</a></li>
                                    <li class="group"><a href=""
                                            class="text-base @yield('menu-32') py-6 px-4 flex hover:bg-sky-600">Layanan
                                            Start-Up</a></li>
                                    <li class="group"><a href=""
                                            class="text-base @yield('menu-33') py-6 px-4 flex hover:bg-sky-600">Pendampingan
                                            Skill Up</a></li>
                                    <li class="group"><a href=""
                                            class="text-base @yield('menu-34') py-6 px-4 flex hover:bg-sky-600">IBC
                                            (Innovation Business Class)</a></li>
                                </ul> --}}
                            </li>
                            <li class="group">
                                <a href="/program_kegiatan"
                                    class="text-base @yield('menu-4') py-6 px-4 flex group-hover:bg-sky-600">Program
                                    Kegiatan</a>
                            </li>
                            <li class="group">
                                <a href="/galeri"
                                    class="text-base @yield('menu-5') py-6 px-4 flex group-hover:bg-sky-600">Galeri
                                    Tenant</a>
                            </li>
                            <li class="group">
                                <a href="/blog"
                                    class="text-base @yield('menu-6') py-6 px-4 flex group-hover:bg-sky-600">Post</a>
                            </li>
                            {{-- <li class="mt-3 lg:mt-0 flex items-center pl-8">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle">
                                    <label for="dark-toggle">
                                        <div
                                            class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div
                                                class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">dark</span>
                                </div>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}


    {{-- Start Content --}}
    @yield('content')
    {{-- End Content --}}


    {{-- Footer Start --}}
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h3 class="font-bold text-2xl mb-2">ALAMAT KANTOR</h3>
                    <p class="my-5">{{$footer->address}}
                    </p>
                    <p class="my-5">{{$footer->address_2}}</p>
                    <p class="my-5">{{$footer->phone}}</p>
                    <p class="my-5">{{$footer->phone_2}}</p>
                    <p class="my-5">082 142 789 456 (Kartika Adi)</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3 ">
                    <h3 class="font-bold text-2xl mb-2 text-slate-300 mx-auto text-center">MITRA IBKWU</h3>
                    <div class="flex flex-wrap">
                        @if ($mitras->count())
                        @foreach($mitras as $mitra)
                        <div class="max-w-[120px]  mx-4 py-4 lg:mx-6 xl:mx-8 flex flex-col">
                            <a href="{{$mitra->mitra_link}}" target="_blank">
                                <img src="/image/mitra/{{$mitra->mitra_img}}" alt="Google"
                                    class="grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            </a>
                        </div>
                        @endforeach
                        @else
                        <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
                            Mitra tidak Tersedia.</p>
                        @endif
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-bold text-2xl mb-2 text-slate-300 mx-auto text-center">LINK EKSTERNAL POLIJE</h3>
                    <ul class="text-slate-300 mt-4 text-center">
                        <li>
                            <a href="{{$footer->link_1}}" target="_blank"
                                class="inline-block text-base hover:text-primary mb-3">{{$footer->link_1}}</a>
                        </li>
                        <li>
                            <a href="{{$footer->link_2}}" target="_blank"
                                class="inline-block text-base hover:text-primary mb-3">{{$footer->link_2}}</a>
                        </li>
                        <li>
                            <a href="{{$footer->link_3}}" target="_blank"
                                class="inline-block text-base hover:text-primary mb-3">{{$footer->link_3}}</a>
                        </li>
                        <li>
                            <a href="{{$footer->link_4}}" target="_blank"
                                class="inline-block text-base hover:text-primary mb-3">{{$footer->link_4}}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                {{-- <div class="flex items-center justify-center mb-5">

                    <a href="{{$footer->yt_link}}" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>


                    <a href="{{$footer->ig_link}}" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <a href="{{$footer->twt_link}}" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>

                    <a href="{{$footer->li_link}}" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div> --}}
                <p class="font-medium text-xs text-slate-500 text-center">© Hak Cipta 2018-2021 IBKWU</p>
                {{-- <p class="font-medium text-xs text-slate-500 text-center">Dibuat oleh <a
                        href="https://instagram.com/irchamzah" target="_blank" class="font-bold text-primary">Irchamzah
                        Fikri Ababil</a>, menggunakan <a href="https://tailwindcss.com" target="_blank"
                        class="font-bold text-sky-500">Tailwind CSS</a>.</p> --}}
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    {{-- Back to Top Start --}}
    <a href="#"
        class="fixed z-[9999] bottom-4 right-4 h-14 w-14 bg-primary rounded-full p-4 hidden items-center justify-center hover:animate-pulse"
        id="to-top">
        <span class="block h-5 w-5 rotate-45 border-t-2 border-l-2 mt-2"></span>
    </a>
    {{-- Back to Top Start --}}

    <script src="/dist/js/script.js"></script>
</body>

</html>