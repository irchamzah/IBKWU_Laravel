@extends('home.app')

@section('title', 'Detail Galeri Tenant')
@section('menu-1', 'text-dark dark:text-white')
@section('menu-2', 'text-dark dark:text-white')
@section('menu-3', 'text-primary dark:text-primary')
@section('menu-4', 'text-dark dark:text-white')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto text-center mb-6">
        <h4 class="font-semibold text-lg text-primary mb-2">Detail Produk</h4>
        <h2 class="font-bold text-dark text-3xl mb-12 sm:text-4xl lg:text-5xl dark:text-white">Judul produk</h2>
        <div class="w-full flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 w-full aspect-video">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
        </div>
        <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2"><span
            class="font-bold">Deskripsi produk</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse a
          odit harum iusto! Quidem tempore, ipsa facere veritatis praesentium eum cum debitis sit dolor ipsum
          dignissimos accusamus eligendi aut molestias quod aliquid ut dolorem quasi quibusdam, tempora consequatur
          quos libero natus! Odit at consequuntur fugiat consequatur, explicabo deleniti ipsum facilis officia quidem
          voluptatem quae animi hic ad, minus nemo beatae tenetur eum excepturi suscipit quam praesentium? Dolorem
          itaque commodi culpa tempora ducimus harum sed adipisci sapiente aspernatur? Explicabo quis hic libero nulla
          nihil excepturi nobis labore vero nostrum impedit, temporibus, similique consequatur, vitae officiis eius a
          accusantium culpa facilis minus.</p>
        <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Assumenda nostrum doloremque voluptatibus, vitae error dolores cupiditate
          repellat! Magni provident est eos possimus inventore minima adipisci consequatur, dicta distinctio quae
          ullam unde dignissimos voluptate et ipsam architecto quasi sapiente omnis reiciendis nesciunt? Nam
          repellendus veritatis non sed cupiditate laudantium optio magnam sit placeat earum voluptates similique
          voluptate rem, doloremque facere. Nihil eos ipsa tenetur aliquid, sapiente provident vitae ea accusamus
          praesentium rem. Illo asperiores nam eaque itaque blanditiis, doloremque beatae explicabo, nesciunt omnis
          excepturi quae adipisci consectetur possimus perferendis placeat ab pariatur corrupti? Ipsa at nulla a
          officia hic iure soluta!</p>
        <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Earum quos laudantium dolorum ex ratione maxime laborum beatae natus? Unde
          nobis qui delectus vitae similique! Mollitia possimus ipsam quisquam non odit eius impedit esse placeat,
          error nostrum cumque beatae natus quae eaque illo. Nam alias voluptas ad deleniti est, adipisci officiis
          maiores tempore blanditiis autem placeat debitis et rerum ullam expedita sequi corporis assumenda
          perspiciatis enim. Culpa consequuntur quasi consequatur blanditiis, temporibus excepturi obcaecati velit
          corrupti distinctio sapiente quaerat soluta, assumenda, vitae nobis aut ipsa! Ullam porro totam excepturi.
          Quisquam libero eligendi culpa placeat cumque sapiente exercitationem minima ipsa hic laudantium?</p>
      </div>
    </div>

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
      <div class="mb-12 p-4 md:w-1/2">
        <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
        </button>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas
          qui?</p>
      </div>
      <div class="mb-12 p-4 md:w-1/2">
        <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
        </button>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas
          qui?</p>
      </div>
      <div class="mb-12 p-4 md:w-1/2">
        <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
        </button>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas
          qui?</p>
      </div>
      <div class="mb-12 p-4 md:w-1/2">
        <button id="show-modal" class="rounded-md shadow-md overflow-hidden hover:opacity-80">
          <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
        </button>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas
          qui?</p>
      </div>
    </div>
  </div>
</section>
{{-- Tentang Section End --}}

{{-- Visi dan Misi Section Start --}}
<section id="visi" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto text-center">
        <h4 class="font-semibold text-lg text-primary mb-2">Hubungi Kami</h4>
        <h2 class="font-bold text-dark text-3xl sm:text-4xl lg:text-5xl dark:text-white">Sosial Media Kami</h2>
      </div>
    </div>

    <div class="w-full px-4">
      <div class="flex flex-wrap items-center justify-center">
        {{-- Youtube --}}
        <a href="https://youtube.com/ibkwu" target="_blank"
          class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-red-600 text-slate-500 hover:animate-pulse font-extrabold">
          YouTube
        </a>

        {{-- Instagram --}}
        <a href="https://instagram.com/ibkwu" target="_blank"
          class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-pink-500 text-slate-500 hover:animate-pulse font-extrabold">
          Instagram
        </a>

        {{-- Twitter --}}
        <a href="https://twitter.com/ibkwu" target="_blank"
          class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-sky-400 text-slate-500 hover:animate-pulse font-extrabold">
          Twitter
        </a>

        {{-- LinkedIn --}}
        <a href="https://linkedin.com/in/ibkwu" target="_blank"
          class="w-20 h-20 m-3 rounded-full flex justify-center items-center hover:text-blue-500 text-slate-500 hover:animate-pulse font-extrabold">
          LinkedIn
        </a>
      </div>
    </div>
  </div>
</section>
{{-- Visi dan Misi Section End --}}

@endsection