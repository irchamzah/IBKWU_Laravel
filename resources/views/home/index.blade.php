@extends('home.app')

@section('title', 'Beranda')
@section('menu-1', 'text-primary dark:text-primary')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-dark dark:text-white')
@section('menu-4', 'text-dark dark:text-white')
@section('content')

{{-- Hero Section Start --}}
<section id="home" class="pt-36 dark:bg-dark">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full self-center px-4 lg:w-1/2">
        <span
          class="block font-bold text-slate-900 text-4xl mt-1 lg:text-5xl dark:text-white mb-6">{{$beranda->home_h1}}</span>
        <p class="font-medium text-secondary mb-10 leading-relaxed">{{$beranda->home_p1}}</p>

        <a href="/profil"
          class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selengkapnya
          ></a>
      </div>
      <div class="w-full self-end px-4 lg:w-1/2">
        <div class="relative mt-10 lg:mt-0 lg:right-0">
          <img src="/img/beranda/{{$beranda->home_img1}}" alt="Dhanang Eka Putra"
            class="relative z-10 mx-auto w-96 bg-cover">
          <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Hero Section End --}}

{{-- About Section Start --}}
<section id="about" class="pt-36 pb-32 dark:bg-dark">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full px-4 mb-10 lg:w-1/2">
        <h4 class="font-bold uppercase text-primary text-lg mb-3">{{$beranda->about_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">{{$beranda->about_h2}}</h2>
        <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">{{$beranda->about_p1}}</p>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white">{{$beranda->about_h3}}
        </h3>
        <p class="font-medium text-base text-secondary mb-6 lg:text-lg">{{$beranda->about_p2}}</p>
        <div class="flex items-center">
          {{-- Youtube --}}
          <a href="{{$footer->yt_link}}" target="_blank"
            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>YouTube</title>
              <path
                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>

          {{-- Instagram --}}
          <a href="{{$footer->ig_link}}" target="_blank"
            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Instagram</title>
              <path
                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
            </svg>
          </a>

          {{-- Twitter --}}
          <a href="{{$footer->twt_link}}" target="_blank"
            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Twitter</title>
              <path
                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
            </svg>
          </a>

          {{-- LinkedIn --}}
          <a href="{{$footer->li_link}}" target="_blank"
            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>LinkedIn</title>
              <path
                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- About Section End --}}

{{-- Galeri Section Start --}}
<section id="galeri" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->galeri_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">{{$beranda->galeri_h2}}
        </h2>
        <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->galeri_p1}}</p>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">

      @if ($detail_produks->count())
      @foreach($detail_produks as $detail_produk)
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/img/detail_produk/{{$detail_produk->detail_produk_img}}" alt="macarina" width="w-full"
            class="h-64 w-full object-cover">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">{{$detail_produk->judul_h1}}</h3>
        <div class="font-medium text-base text-secondary truncate">{!!$detail_produk->deskripsi_p1!!}</div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
        Produk
        tidak tersedia.</p>
      @endif

    </div>

  </div>
  <div class=" mx-auto items-center w-full text-center">
    <a href="/galeri"
      class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selengkapnya
      ></a>
  </div>
</section>
{{-- Galeri Section End --}}

{{-- Mitra Section Start --}}
<section id="mitra" class="pt-36 pb-32 bg-slate-800 dark:bg-slate-300">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->mitra_h1}}</h4>
        <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">{{$beranda->mitra_h2}}
        </h2>
        <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->mitra_p1}}</p>
      </div>
    </div>

    <div class="w-full px-4">
      <div class="flex flex-wrap items-center justify-center">

        @if ($mitras->count())
        @foreach($mitras as $mitra)
        <div class="max-w-[120px] mx-4 py-4 lg:mx-6 xl:mx-8 flex flex-col">
          <a href="{{$mitra->mitra_link}}" target="_blank">
            <img src="/img/mitra/{{$mitra->mitra_img}}" alt="Google"
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
  </div>
</section>
{{-- Mitra Section End --}}

{{-- Blog Section Start --}}
<section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->blog_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">{{$beranda->blog_h2}}</h2>
        <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->blog_p1}}</p>
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
              <a href="/blog"
                class="block mb-3 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">{{$detail_blog->judul_h1}}</a>
            </h3>
            <div class="font-medium text-base text-secondary mb-6 truncate">{!!$detail_blog->deskripsi_p1!!}</div>
            <a href="/blog" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
              Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 rounded-xl p-4 bg-white">
        Blog tidak tersedia.</p>
      @endif

    </div>
  </div>
</section>
{{-- Blog Section End --}}

{{-- Contact Section Start --}}
<section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->kontak_h1}}</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">{{$beranda->kontak_h2}}
        </h2>
        <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->kontak_p1}}</p>
      </div>
    </div>

    <form>
      <div class="w-full lg:w-2/3 lg:mx-auto">
        <div class="w-full px-4 mb-8">
          <label for="nama" class="text-base font-bold text-primary">Nama</label>
          <input type="text" id="nama"
            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
        </div>
        <div class="w-full px-4 mb-8">
          <label for="email" class="text-base font-bold text-primary">Email</label>
          <input type="text" id="email"
            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
        </div>
        <div class="w-full px-4 mb-8">
          <label for="pesan" class="text-base font-bold text-primary">Pesan</label>
          <textarea type="text" id="email"
            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
        </div>
        <div class="w-full px-4">
          <button
            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
        </div>
      </div>
    </form>
  </div>
</section>
{{-- Contact Section End --}}

@endsection