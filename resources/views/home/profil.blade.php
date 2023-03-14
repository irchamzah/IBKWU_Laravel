<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- #0093d3  --}}
    {{-- logo title bar  --}}
    <link rel="icon" href="/img/logo_IBKWU.png" type="image/x-icon">

    <title>IBKWU - Inkubator Bisnis dan Kewirausahaan</title>

    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    </script>
  </head>

  <body class="font-poppins">
    {{-- Header Start --}}
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="/" class="font-bold text-lg text-primary block py-6">IBKWU</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out origin-top-left"></span>
              <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out"></span>
              <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:dark:bg-transparent dark:bg-dark dark:shadow-slate-500">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="/" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Beranda</a>
                </li>
                <li class="group">
                  <a href="profil" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Profil</a>
                </li>
                <li class="group">
                  <a href="#galeri" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Galeri Tenant</a>
                </li>
                <li class="group">
                  <a href="#mitra" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Mitra</a>
                </li>
                <li class="group">
                  <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Blog</a>
                </li>
                <li class="group">
                  <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Kontak</a>
                </li>
                <li class="mt-3 lg:mt-0 flex items-center pl-8">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle">
                    <label for="dark-toggle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">dark</span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    {{-- Header End --}}

    {{-- Tentang Section Start --}}
    <section id="tentang" class="pt-36 pb-16 dark:bg-dark">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-6">
            <h4 class="font-semibold text-lg text-primary mb-2">Sejarah dan Pendirian</h4>
            <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl dark:text-white">Sejarah dan Pendirian IBKWU</h2>
            <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse a odit harum iusto! Quidem tempore, ipsa facere veritatis praesentium eum cum debitis sit dolor ipsum dignissimos accusamus eligendi aut molestias quod aliquid ut dolorem quasi quibusdam, tempora consequatur quos libero natus! Odit at consequuntur fugiat consequatur, explicabo deleniti ipsum facilis officia quidem voluptatem quae animi hic ad, minus nemo beatae tenetur eum excepturi suscipit quam praesentium? Dolorem itaque commodi culpa tempora ducimus harum sed adipisci sapiente aspernatur? Explicabo quis hic libero nulla nihil excepturi nobis labore vero nostrum impedit, temporibus, similique consequatur, vitae officiis eius a accusantium culpa facilis minus.</p>
            <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nostrum doloremque voluptatibus, vitae error dolores cupiditate repellat! Magni provident est eos possimus inventore minima adipisci consequatur, dicta distinctio quae ullam unde dignissimos voluptate et ipsam architecto quasi sapiente omnis reiciendis nesciunt? Nam repellendus veritatis non sed cupiditate laudantium optio magnam sit placeat earum voluptates similique voluptate rem, doloremque facere. Nihil eos ipsa tenetur aliquid, sapiente provident vitae ea accusamus praesentium rem. Illo asperiores nam eaque itaque blanditiis, doloremque beatae explicabo, nesciunt omnis excepturi quae adipisci consectetur possimus perferendis placeat ab pariatur corrupti? Ipsa at nulla a officia hic iure soluta!</p>
            <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos laudantium dolorum ex ratione maxime laborum beatae natus? Unde nobis qui delectus vitae similique! Mollitia possimus ipsam quisquam non odit eius impedit esse placeat, error nostrum cumque beatae natus quae eaque illo. Nam alias voluptas ad deleniti est, adipisci officiis maiores tempore blanditiis autem placeat debitis et rerum ullam expedita sequi corporis assumenda perspiciatis enim. Culpa consequuntur quasi consequatur blanditiis, temporibus excepturi obcaecati velit corrupti distinctio sapiente quaerat soluta, assumenda, vitae nobis aut ipsa! Ullam porro totam excepturi. Quisquam libero eligendi culpa placeat cumque sapiente exercitationem minima ipsa hic laudantium?</p>
          </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
            </div>
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
            <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas qui?</p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="/dist/img/galeri/macarina-2.jpg" alt="" width="w-full">
            </div>
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Pendirian IBKWU</h3>
            <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nulla consequuntur blanditiis architecto suscipit mollitia dolore quas beatae. Ex, dolorem?</p>
          </div>
        </div>
      </div>
    </section>
    {{-- Tentang Section End --}}

    {{-- Visi dan Misi Section Start --}}
    <section id="visi" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
      <div class="container">
        <div class="container">
          <div class="w-full px-4">
            <div class="max-w-5xl mx-auto text-center mb-10">
              <h4 class="font-semibold text-lg text-primary mb-2">Visi dan Misi</h4>
              <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Visi dan Misi IBKWU</h2>
              <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?</p>
            </div>
          </div>

          <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
              <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Visi</h2>
              <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                <li>Menjalankan inkubasi sesuai standar manajemen mutu dan ISO 9001 – 2008.</li>
                <li>Memberikan layanan kepada masyarakat, mahasiswa dan alumni berbagai perguruan tinggi untuk memulai usaha sehingga tumbuh dan berkembang secara mandiri.</li>
              </ul>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Misi</h2>
              <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                <li>Memberikan layanan pra inkubasi – masa inkubasi – pasca inkubasi secara terstruktur dan berkelanjutan dengan masa inkubasi minimal 3 tahun.</li>
                <li>Memberikan layanan inkubasi in-wall dan out-wall baik secara langsung maupun virtual dalam bentuk aplikasi dan inovasi IPTEK, motivasi, peningkatan kekuatan personal, pengetahuan, keterampilan teknis, manajerial dan kepemimpinan melalui kegiatan penyuluhan, pelatihan, pendidikan, pendampingan dan business coach.</li>
                <li>Memberi layanan transfer pengetahuan dan teknologi tepat guna maupun pengembangan hak kekayaan intelektual serta hak cipta terhadap produk dan bisnis.</li>
                <li>Memberikan layanan yang berbasis pada nilai – nilai kebenaran perkataan, nurani dan pikiran.</li>
                <li>Memberikan layanan dengan prinsip etika bisnis, komitmen dua arah, berorientasi tujuan, dan fokus untuk sukses.</li>
                <li>Meningkatkan reputasi dan pencitraan terhadap layanan inkubasi.</li>
                <li>Mengembangkan kapabilitas dan kompetensi team work inkubator secara professional dan berdaya saing.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Visi dan Misi Section End --}}

    {{-- Tujuan dan Sasaran Section Start --}}
    <section id="tujuan" class="pt-36 pb-16 dark:bg-dark">
      <div class="container">   
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-10">
            <h4 class="font-semibold text-lg text-primary mb-2">Tujuan dan Sasaran</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Tujuan dan Sasaran IBKWU</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ipsam quia quasi earum. Minus iste consequuntur deleniti obcaecati, fugit deserunt!</p>
          </div>
        </div>
      
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2">
            <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Tujuan</h2>
            <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
              <li>Menumbuhkembangkan budaya kewirausahaan di lingkungan Perguruan Tinggi dan Masyarakat umum.</li>
              <li>Mewujudkan sinergi Politeknik Negeri Jember dengan potensi dunia usaha sehingga dapat menumbuhkembangkan IPTEK sesuai kebutuhan.</li>
              <li>MMendorong kemanfaatan potensi bisnis akademik dan non akademik yang bernilai komersial.</li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Sasaran</h2>
            <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
              <li>Melakukan inkubasi untuk pengembangan wirausaha baru yang mandiri dan professional.</li>
              <li>Meningkatkan kinerja tenant yang dicirikan dengan meningkatnya volume usaha, nilai tambah, produktivitas dan penyerapan tenaga kerja.</li>
              <li>Meningkatkan kualitas layanan Inkubator Bisnis, memaksimalkan semangat kewirausahaan mahasiswa POLIJE.</li>
              <li>Menstimulasi dan menggalang partisipasi berbagai pihak dalam mengembangkan wirausaha melalui Inkubator Bisnis dan KWU POLIJE.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    {{-- Tujuan dan Sasaran Section End --}}

    {{-- Struktur Kepengurusan Section Start --}}
    <section id="struktur" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-10">
            <h4 class="font-semibold text-lg text-primary mb-2">Struktur Kepengurusan</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Struktur Kepengurusan IBKWU</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?</p>
            <p class="font-medium text-md text-secondary md:text-lg text-justify mb-2 mt-16">IBKWU Politeknik Negeri Jember memiliki struktur kepengurusan sesuai Surat Keputusan Direktur Politeknik Negeri Jember Nomor 3131/PL17/KP/SK/2020 adalah sebagai berikut:</p>
            <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
              <li><span class="font-semibold">Kepala</span> : Dr. Dhanang Eka Putra, SP, M.Sc</li>
              <li><span class="font-semibold">Sekretaris</span> : Hariyono Rakhmad, S.Pd, M.Kom</li>
              <li><span class="font-semibold">General Manajer</span> : Drs. Lukman Ekana Putra, P.Si., M. Si.</li>
              <li><span class="font-semibold">Manajer Teknologi Informasi</span> : Nugroho Setyo Wibowo, S.T., M. T.</li>
              <li><span class="font-semibold">Manajer Kemitraan</span> : Elly Antika, S.T., M. Kom.</li>
              <li><span class="font-semibold">Manajer Training & Business Class</span> : Mukhamad Angga Gumilang, S. Pd., M. Eng.</li>
              <li><span class="font-semibold">Manajer Diseminasi Teknologi</span> : Rindha Retina Darah Pertami, S. P., M. Si.</li>
              <li><span class="font-semibold">Manajer Pengembangan Produk</span> : Silvia Oktavia Nur Yudiastuti, S.T.P., M.T.P.</li>
            </ul>
          </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 p-4">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
            </div>
          </div>
        </div>
      </div>
    </section>
  {{-- Struktur Kepengurusan Section End --}}

  {{-- Footer Start --}}
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
          <h2 class="font-bold text-4xl text-white mb-5">IBKWU</h2>
          <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
          <p>irchamzah.fikri.ababil@gmail.com</p>
          <p>Jl. Mastrip, Kotak Pos 164 – Tegalgede, Sumbersari</p>
          <p>Kabupaten Jember, Jawa Timur 68124</p>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming</a>
            </li>
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a>
            </li>
            <li>
              <a href="#" class="inline-block text-base hover:text-primary mb-3">Gaya Hidup</a>
            </li>
          </ul>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
            </li>
            <li>
              <a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
            </li>
            <li>
              <a href="#galeri" class="inline-block text-base hover:text-primary mb-3">Galeri Tenant</a>
            </li>
            <li>
              <a href="#mitra" class="inline-block text-base hover:text-primary mb-3">Mitra</a>
            </li>
            <li>
              <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
            </li>
            <li>
              <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Kontak</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="w-full pt-10 border-t border-slate-700">
        <div class="flex items-center justify-center mb-5">
          {{-- Youtube --}}
          <a href="https://youtube.com/ibkwu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>

          {{-- Instagram --}}
          <a href="https://instagram.com/ibkwu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
          </a>

          {{-- Twitter --}}
          <a href="https://twitter.com/ibkwu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
          </a>

          {{-- LinkedIn --}}
          <a href="https://linkedin.com/in/ibkwu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
        </div>
        <p class="font-medium text-xs text-slate-500 text-center">Dibuat oleh <a href="https://instagram.com/irchamzah" target="_blank" class="font-bold text-primary">Irchamzah Fikri Ababil</a>, menggunakan <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.</p>
      </div>
    </div>
  </footer>
  {{-- Footer End --}}

  {{-- Back to Top Start --}}
  <a href="#tentang" class="fixed z-[9999] bottom-4 right-4 h-14 w-14 bg-primary rounded-full p-4 hidden items-center justify-center hover:animate-pulse" id="to-top">
    <span class="block h-5 w-5 rotate-45 border-t-2 border-l-2 mt-2"></span>
  </a>
  {{-- Back to Top Start --}}
    
  <script src="/dist/js/script.js"></script>
  </body>
</html>