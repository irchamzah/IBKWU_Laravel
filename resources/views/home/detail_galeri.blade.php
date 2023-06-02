@extends('home.app')

@section('title', 'Detail Galeri Tenant')
@section('menu-1', 'text-white')
@section('menu-2', 'text-white')
@section('menu-3', 'text-white')
@section('menu-4', 'text-white')
@section('menu-5', 'text-white bg-sky-600')
@section('menu-6', 'text-white')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto mb-6">

        <div class="shadow-md p-4">
          <div><a href="/galeri" class="text-primary hover:text-dark">Home</a> / {{$detail_produk->judul_h1}}</div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full p-4 lg:w-3/4">
            <h1 class="font-bold text-3xl my-5 text-justify">
              {{$detail_produk->judul_h1}}
            </h1>
            <hr>
            <small class="text-slate-400">{{
              $detail_produk->created_at->diffForHumans()}} |
              {{$detail_produk->kategori_galeri->kategori}}
            </small>
            <div class="font-medium text-base text-dark text-justify mt-7 mb-3">
              {!!$detail_produk->deskripsi_p1!!}
            </div>

            @foreach($foto_produks as $foto_produk)
            <div class="mb-12 w-full">
              <div id="show-modal" class="shadow-md overflow-hidden mx-auto">
                <img src="/image/foto_produk/{{$foto_produk->produk_img1}}" alt="" width="w-full">
              </div>
              <h3 class="font-semibold text-sm text-dark mt-5 mb-3 text-center">
                {{$foto_produk->produk_h1}}</h3>
              <div class="font-medium text-base text-dark text-justify">{!!$foto_produk->produk_p1!!}
              </div>
            </div>
            @endforeach

            {{-- <h1 class="text-base mb-4">Lokasi Penjualan:</h1>
            <div class="w-full mb-10 ">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.5348246457584!2d113.72235495083945!3d-8.158381216742027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b6ea0e8375%3A0x4618d7137a4cf5c1!2sGedung%20Jurusan%20TI%20Politeknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1685524651681!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> --}}
            <hr class="my-5">

            <!--Metric Card-->
            <div class="bg-slate-100 p-4 shadow rounded-3xl mb-4 flex rounded-tl-none">
              <form action="{{route('galeri.detail_galeri.komen.komen_galeri_store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <input type="text" name="id" value="{{$detail_produk->id}}" hidden>
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
                <div class="flex">
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

            <h1 class="text-base mb-4 mt-7 font-semibold">Komentar :</h1>
            @foreach($komen_produks as $komen_produk)
            <div class="bg-slate-100 p-4 shadow rounded-full mb-4 flex rounded-tl-none">
              <div class="h-10 w-10 items-center justify-center my-auto mr-5 rounded-full  bg-slate-500">
                <svg class="w-6 h-6 text-white my-auto mx-auto text-center justify-center mt-1" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM12 14c3.866 0 7 3.134 7 7v1a1 1 0 01-1 1H6a1 1 0 01-1-1v-1c0-3.866 3.134-7 7-7z" />
                </svg>

              </div>
              <div class="">
                <h3 class="text-lg font-semibold mb-2">{{ $komen_produk->nama_user }}</h3>
                <p class="text-gray-600">{{ $komen_produk->komen_user}}</p>
                <span class="text-gray-400 text-sm">{{ $komen_produk->created_at->diffForHumans() }}</span>
                <div class="text-red-400 text-sm w-full mt-3"><a
                    href="{{route('galeri.detail_galeri.komen.komen_galeri_delete', $komen_produk->id, $komen_produk->produk_id)}}"><small
                      class="">Hapus Komentar</small></a>
                </div>
              </div>
            </div>
            @endforeach


            <!--Metric Card-->
            {{-- <a href="{{route('galeri.detail_galeri.komen', $detail_produk->slug)}}">
              <div
                class="bg-primary text-white hover:opacity-90 text-center -lg py-4 px-6 w-min mx-auto whitespace-nowrap font-semibold my-10 flex-row rounded-full rounded-tl-none">
                Tambah Komentar
              </div>
            </a> --}}
            <!--/Metric Card-->

            <hr class="mt-5">
          </div>

          <div class="w-full p-4 lg:w-1/4">
            <div class="">

              <h1 class="text-base mb-4 mt-7">Video Produk :</h1>
              <div class="w-full mb-10">
                <iframe class="" src="https://www.youtube.com/embed/{{$detail_produk->link_yt}}"></iframe>
              </div>

              <h1 class="text-base mb-4">Kontak Pemilik:</h1>
              <div class="mb-10">
                @foreach($sosmeds as $sosmed)
                <a href="{{$sosmed->link_sosmed}}" target="_blank" class="">
                  <div
                    class="bg-{{$sosmed->warna->nama_warna}}-600 text-white p-2 text-center w-full hover:bg-opacity-90 my-2">

                    {{$sosmed->nama_sosmed}}
                  </div>
                </a>
                @endforeach
              </div>

              <h1 class="text-base mb-4 mt-7">Instagram :</h1>
              <div class="mb-10">
                <blockquote class="instagram-media" data-instgrm-captioned
                  data-instgrm-permalink="https://www.instagram.com/p/{{$detail_produk->link_ig}}/?utm_source=ig_embed&amp;utm_campaign=loading"
                  data-instgrm-version="14"
                  style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                  <div style="padding:16px;"> <a
                      href="https://www.instagram.com/p/{{$detail_produk->link_ig}}/?utm_source=ig_embed&amp;utm_campaign=loading"
                      style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                      target="_blank">
                      <div style=" display: flex; flex-direction: row; align-items: center;">
                        <div
                          style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                        </div>
                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                          </div>
                        </div>
                      </div>
                      <div style="padding: 19% 0;"></div>
                      <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px"
                          height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                          xmlns:xlink="https://www.w3.org/1999/xlink">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                              <g>
                                <path
                                  d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                </path>
                              </g>
                            </g>
                          </g>
                        </svg></div>
                      <div style="padding-top: 8px;">
                        <div
                          style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                          View this post on Instagram</div>
                      </div>
                      <div style="padding: 12.5% 0;"></div>
                      <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                        <div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                          </div>
                          <div
                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                          </div>
                          <div
                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                          </div>
                        </div>
                        <div style="margin-left: 8px;">
                          <div
                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                          </div>
                        </div>
                        <div style="margin-left: auto;">
                          <div
                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                          </div>
                          <div
                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                          </div>
                          <div
                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                          </div>
                        </div>
                      </div>
                      <div
                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                        </div>
                        <div
                          style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                        </div>
                      </div>
                    </a>
                    <p
                      style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                      <a href="https://www.instagram.com/p/{{$detail_produk->link_ig}}/?utm_source=ig_embed&amp;utm_campaign=loading"
                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                        target="_blank"></a>
                    </p>
                  </div>
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
{{-- Tentang Section End --}}

{{-- Galeri Tenant Section Start --}}
<section id="tenant" class="pt-10 pb-10 bg-slate-100 dark:bg-slate-800">
  <div class="sm:container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-5">
        <h2 class="font-bold text-dark mb-5 text-3xl sm:text-4xl">PRODUK LAINNYA
        </h2>
        <hr class="mb-10">
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