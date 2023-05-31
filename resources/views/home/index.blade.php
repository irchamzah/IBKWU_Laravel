@extends('home.app')

@section('title', 'Beranda')
@section('menu-1', 'text-white bg-sky-600')
@section('menu-2', 'text-white')
@section('menu-3', 'text-white')
@section('menu-4', 'text-white')
@section('menu-5', 'text-white')
@section('menu-6', 'text-white')
@section('content')

{{-- Slider Section Start --}}
<section id="slider" class="pt-24 bg-slate-100">
  <div class="">
    <div class="flex flex-wrap">
      <div class="w-full self-center bg-black">

        <!-- component -->
        <!-- This is an example component -->
        <div class="w-full mx-auto">

          <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">

              @if ($post_beritas->count())
              @foreach($post_beritas as $post_berita)
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                  class="absolute flex flex-col top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-1/2 text-center">
                  <span
                    class="text-2xl font-extrabold text-white sm:text-3xl mb-2 truncate">{{$post_berita->judul_h1}}</span>
                  <span
                    class="text-sm font-medium text-white sm:text-sm truncate max-h-10">{!!$post_berita->deskripsi_p1!!}</span>
                  <a href="{{route('blog.detail_blog', $post_berita->slug)}}"
                    class="border-2 text-white w-min mx-auto px-3 py-1 mt-4 hover:bg-white hover:bg-opacity-20">Selengkapnya</a>
                </div>
                <img src="/image/detail_blog/{{$post_berita->detail_blog_img}}"
                  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 opacity-50" alt="...">
              </div>
              @endforeach
              @else
              <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
                Post tidak tersedia.</p>
              @endif

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
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
              </span>
            </button>
            <button type="button"
              class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
              data-carousel-next>
              <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
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
<section id="blog" class="pt-10 pb-10 bg-fixed bg-slate-100">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->blog_h1}}</h4> --}}
        <h2 class="font-bold text-dark  mb-5 text-3xl sm:text-4xl lg:text-4xl hover:text-primary"><a
            href="/blog">{{$beranda->pengumuman_h1}}</a></h2>
        <hr>
        {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->blog_p1}}</p> --}}
      </div>
    </div>

    <div class="flex flex-wrap">

      @if ($post_pengumumans->count())
      @foreach($post_pengumumans as $post_pengumuman)
      <div class="w-full px-4 md:w-1/2 lg:w-1/4">
        <div class="bg-white  shadow-lg overflow-hidden mb-10">
          <img src="/image/detail_blog/{{$post_pengumuman->detail_blog_img}}" alt="Programming"
            class="h-64 w-full object-cover">
          <div class="py-8 px-6">
            <h3>
              <a href="{{route('blog.detail_blog', $post_pengumuman->slug)}}"
                class="block mb-1 font-semibold text-xl text-dark hover:text-primary truncate">{{$post_pengumuman->judul_h1}}</a>
            </h3>
            <small class="text-slate-400">{{
              $post_pengumuman->created_at->diffForHumans()}} |
              {{$post_pengumuman->kategori_blog->kategori}}
            </small>
            <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
              {!!$post_pengumuman->deskripsi_p1!!}</div>
            <a href="{{route('blog.detail_blog', $post_pengumuman->slug)}}"
              class="font-medium text-sm text-white bg-primary py-2 px-4 hover:bg-sky-600">Baca
              Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
        Blog tidak tersedia.</p>
      @endif
    </div>

    <div class="w-full sm:w-96 mx-auto">
      <div class="mt-4 mx-10">
        {{ $post_pengumumans->links() }}
      </div>
    </div>

  </div>
</section>
{{-- Blog Section End --}}

{{-- About Section Start --}}
<section id="about" class="pt-10 pb-10 bg-fixed bg-cover bg-bottom"
  style="background-image: url(/img/gedung_pasca_sarjana_polije.jpg)">
  <div class="sm:container">
    <div class="flex flex-wrap">
      <div class="w-full px-4 text-center mb-5">
        <h2 class="font-bold text-white  mb-5 text-3xl sm:text-4xl lg:text-4xl">{{$beranda->yt_h1}}
        </h2>
        <hr class="max-w-xl mx-auto">
        <div class="w-full px-4 aspect-video mt-5">
          <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{$beranda->link_yt}}"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- About Section End --}}

{{-- Blog Section Start --}}
<section id="blog" class="pt-10 pb-10">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->blog_h1}}</h4> --}}
        <h2 class="font-bold text-dark text-3xl sm:text-4xl lg:text-4xl mb-5 hover:text-primary"><a
            href="/blog">{{$beranda->berita_h1}}</a></h2>
        <hr>
        {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->blog_p1}}</p> --}}
      </div>
    </div>

    <div class="flex flex-wrap">

      @if ($post_beritas->count())
      @foreach($post_beritas as $post_berita)
      <div class="w-full px-4 md:w-1/2 lg:w-1/4">
        <div class="bg-white shadow-lg overflow-hidden mb-10">
          <img src="/image/detail_blog/{{$post_berita->detail_blog_img}}" alt="Programming"
            class="h-64 w-full object-cover">
          <div class="py-8 px-6">
            <h3>
              <a href="{{route('blog.detail_blog', $post_berita->slug)}}"
                class="block mb-1 font-semibold text-xl text-dark hover:text-primary truncate">{{$post_berita->judul_h1}}</a>
            </h3>
            <small class="text-slate-400">{{
              $post_berita->created_at->diffForHumans()}} |
              {{$post_berita->kategori_blog->kategori}}
            </small>
            <div class="font-medium text-base text-secondary mb-6 truncate mt-2 max-h-20">
              {!!$post_berita->deskripsi_p1!!}</div>
            <a href="{{route('blog.detail_blog', $post_berita->slug)}}"
              class="font-medium text-sm text-white bg-primary py-2 px-4 hover:bg-sky-600">Baca
              Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-red-600 mx-auto border-collapse border-red-500 border-2 p-4 bg-white">
        Blog tidak tersedia.</p>
      @endif
    </div>

    <div class="w-full sm:w-96 mx-auto">
      <div class="mt-4">
        {{ $post_beritas->links() }}
      </div>
    </div>

  </div>
</section>
{{-- Blog Section End --}}

{{-- Contact Section Start --}}
<section id="contact" class="pt-10 pb-10 bg-fixed bg-cover bg-bottom"
  style="background-image: url(/img/gedung_pasca_sarjana_polije.jpg)">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->kontak_h1}}</h4> --}}
        <h3 class="font-bold text-white text-3xl sm:text-4xl mb-5">{{$beranda->lokasi_h1}}
        </h3>
        <hr>
        {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->kontak_p1}}</p> --}}
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
            class="w-full bg-slate-200 text-dark p-3 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
        </div>
        <div class="w-full px-4 mb-8">
          <label for="email" class="text-base font-bold text-primary">Email</label>
          <input type="text" id="email"
            class="w-full bg-slate-200 text-dark p-3 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
        </div>
        <div class="w-full px-4 mb-8">
          <label for="pesan" class="text-base font-bold text-primary">Pesan</label>
          <textarea type="text" id="email"
            class="w-full bg-slate-200 text-dark p-3 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
        </div>
        <div class="w-full px-4">
          <button
            class="text-base font-semibold text-white bg-primary py-3 px-8 w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
        </div>
      </div>
    </form> --}}
  </div>
</section>
{{-- Contact Section End --}}

{{-- Galeri Section Start --}}
<section id="galeri" class="pt-10 pb-10">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        {{-- <h4 class="font-semibold text-lg text-primary mb-2">{{$beranda->galeri_h1}}</h4> --}}
        <h3 class="font-bold text-dark text-3xl sm:text-4xl mb-5 hover:text-primary"><a
            href="/galeri">{{$beranda->galeri_h1}}</a>
        </h3>
        <hr>
        {{-- <p class="font-medium text-md text-secondary md:text-lg">{{$beranda->galeri_p1}}</p> --}}
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center  xl:mx-auto">

      @if ($detail_produks->count())
      @foreach($detail_produks as $detail_produk)
      <div class="p-4 md:w-1/3">
        <div class=" shadow-md overflow-hidden"><a href="{{route('galeri.detail_galeri', $detail_produk->slug)}}">
            <img src="/image/detail_produk/{{$detail_produk->detail_produk_img}}" alt="macarina" width="w-full"
              class="h-64 w-full object-cover hover:opacity-90"></a>
        </div>
        {{-- <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{$detail_produk->judul_h1}}</h3>
        <small class="text-slate-400">{{
          $detail_produk->created_at->diffForHumans()}} |
          {{$detail_produk->kategori_galeri->kategori}}
        </small>
        <div class="font-medium text-base text-secondary truncate mt-2">{!!$detail_produk->deskripsi_p1!!}</div> --}}
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
  {{-- <div class=" mx-auto items-center w-full text-center mt-10 mb-10">
    <a href="/galeri" class="text-base font-medium text-white bg-primary py-3 px-6 hover:bg-sky-600">Lihat
      Produk Lainnya</a>
  </div> --}}
</section>
{{-- Galeri Section End --}}



@endsection