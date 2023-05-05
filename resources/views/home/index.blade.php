@extends('home.app')

@section('title', 'Beranda')
@section('menu-1', 'text-primary dark:text-primary')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-dark dark:text-white')
@section('menu-4', 'text-dark dark:text-white')
@section('content')

{{-- Slider Section Start --}}
<section id="slider" class="pt-24 dark:bg-dark">
  <div class="">
    <div class="flex flex-wrap">
      <div class="w-full self-center px-4 ">

        <!-- component -->
        <!-- This is an example component -->
        <div class="w-full mx-auto">

          <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                  class="absolute flex flex-col top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-1/2 text-center">
                  <span class="text-2xl font-semibold text-white sm:text-3xl mb-2">First
                    Slide</span>
                  <span class="text-sm font-semibold text-white sm:text-sm truncate">Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta.</span>
                  <a href="#"
                    class="border-2 text-white w-min mx-auto px-3 py-1 mt-4 rounded hover:bg-white hover:bg-opacity-20">Selengkapnya</a>
                </div>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <span
                  class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 z-10">Second
                  Slide</span>
                <span
                  class="absolute bottom-1/3 left-1/2 text-sm font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-sm dark:text-gray-800 z-10">Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta.</span>
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <span
                  class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800 z-10">Third
                  Slide</span>
                <span
                  class="absolute bottom-1/3 left-1/2 text-sm font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-sm dark:text-gray-800 z-10">Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta.</span>
              </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
              class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
              data-carousel-prev>
              <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
              </span>
            </button>
            <button type="button"
              class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
              data-carousel-next>
              <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Next</span>
              </span>
            </button>
          </div>


          <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

      </div>
    </div>
  </div>
</section>
{{-- Slider Section End --}}

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
                class="block mb-1 font-semibold text-xl text-dark hover:text-primary hover:dark:text-primary truncate dark:text-white">{{$detail_blog->judul_h1}}</a>
            </h3>
            <small class="text-slate-400 dark:text-slate-600">{{
              $detail_blog->created_at->diffForHumans()}} |
              {{$detail_blog->kategori_blog->kategori}}
            </small>
            <div class="font-medium text-base text-secondary mb-6 truncate mt-2">{!!$detail_blog->deskripsi_p1!!}</div>
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

{{-- About Section Start --}}
<section id="about" class="pt-36 pb-32 dark:bg-dark">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full px-4 mb-10 lg:w-1/2">
        <h4 class="font-bold uppercase text-primary text-lg mb-3">{{$beranda->about_h1}}</h4>
        <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl dark:text-white">{{$beranda->about_h2}}
          </h2>
          <div class="w-full px-4 aspect-video">
            <img src="/img/detail_produk/" alt="Programming" class="w-full">
          </div>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">{{$beranda->about_h3}}
        </h3>
        <div class="w-full px-4 aspect-video">
          <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- About Section End --}}

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
        <small class="text-slate-400 dark:text-slate-600">{{
          $detail_produk->created_at->diffForHumans()}} |
          {{$detail_produk->kategori_galeri->kategori}}
        </small>
        <div class="font-medium text-base text-secondary truncate mt-2">{!!$detail_produk->deskripsi_p1!!}</div>
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

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.135323894769!2d113.72303419350794!3d-8.156823629789072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b6c06feea7%3A0x8014dc75ef0320b7!2sGedung%20Pasca%20Sarjana%20Politeknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1681550636653!5m2!1sid!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade" class="items-center w-full text-center mx-auto"></iframe>


    {{-- <form>
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
    </form> --}}
  </div>
</section>
{{-- Contact Section End --}}

@endsection