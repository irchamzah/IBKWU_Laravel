@extends('home.app')

@section('title', 'Profil')
@section('menu-1', 'text-dark dark:text-white')
@section('menu-2', 'text-primary dark:text-primary')
@section('menu-3', 'text-dark dark:text-white')
@section('menu-4', 'text-dark dark:text-white')
@section('content')

{{-- Tentang Section Start --}}
<section id="tentang" class="pt-36 pb-16 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-5xl mx-auto text-center mb-6">
        <h4 class="font-semibold text-lg text-primary mb-2">Sejarah dan Pendirian</h4>
        <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl dark:text-white">Sejarah dan Pendirian
          IBKWU</h2>
        <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit,
          amet consectetur adipisicing elit. Esse a odit harum iusto! Quidem tempore, ipsa facere veritatis
          praesentium eum cum debitis sit dolor ipsum dignissimos accusamus eligendi aut molestias quod aliquid ut
          dolorem quasi quibusdam, tempora consequatur quos libero natus! Odit at consequuntur fugiat consequatur,
          explicabo deleniti ipsum facilis officia quidem voluptatem quae animi hic ad, minus nemo beatae tenetur eum
          excepturi suscipit quam praesentium? Dolorem itaque commodi culpa tempora ducimus harum sed adipisci
          sapiente aspernatur? Explicabo quis hic libero nulla nihil excepturi nobis labore vero nostrum impedit,
          temporibus, similique consequatur, vitae officiis eius a accusantium culpa facilis minus.</p>
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

    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Sejarah IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas
          qui?</p>
      </div>
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/dist/img/galeri/macarina-2.jpg" alt="" width="w-full">
        </div>
        <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">Pendirian IBKWU</h3>
        <p class="font-medium text-base text-secondary text-justify">Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Libero nulla consequuntur blanditiis architecto suscipit mollitia dolore quas beatae. Ex,
          dolorem?</p>
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
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Visi dan Misi IBKWU
          </h2>
          <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?</p>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2">
          <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Visi</h2>
          <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
            <li>Menjalankan inkubasi sesuai standar manajemen mutu dan ISO 9001 – 2008.</li>
            <li>Memberikan layanan kepada masyarakat, mahasiswa dan alumni berbagai perguruan tinggi untuk memulai
              usaha sehingga tumbuh dan berkembang secara mandiri.</li>
          </ul>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Misi</h2>
          <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
            <li>Memberikan layanan pra inkubasi – masa inkubasi – pasca inkubasi secara terstruktur dan berkelanjutan
              dengan masa inkubasi minimal 3 tahun.</li>
            <li>Memberikan layanan inkubasi in-wall dan out-wall baik secara langsung maupun virtual dalam bentuk
              aplikasi dan inovasi IPTEK, motivasi, peningkatan kekuatan personal, pengetahuan, keterampilan teknis,
              manajerial dan kepemimpinan melalui kegiatan penyuluhan, pelatihan, pendidikan, pendampingan dan
              business coach.</li>
            <li>Memberi layanan transfer pengetahuan dan teknologi tepat guna maupun pengembangan hak kekayaan
              intelektual serta hak cipta terhadap produk dan bisnis.</li>
            <li>Memberikan layanan yang berbasis pada nilai – nilai kebenaran perkataan, nurani dan pikiran.</li>
            <li>Memberikan layanan dengan prinsip etika bisnis, komitmen dua arah, berorientasi tujuan, dan fokus
              untuk sukses.</li>
            <li>Meningkatkan reputasi dan pencitraan terhadap layanan inkubasi.</li>
            <li>Mengembangkan kapabilitas dan kompetensi team work inkubator secara professional dan berdaya saing.
            </li>
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
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Tujuan dan Sasaran IBKWU
        </h2>
        <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing
          elit. Eveniet ipsam quia quasi earum. Minus iste consequuntur deleniti obcaecati, fugit deserunt!</p>
      </div>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full px-4 lg:w-1/2">
        <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Tujuan</h2>
        <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
          <li>Menumbuhkembangkan budaya kewirausahaan di lingkungan Perguruan Tinggi dan Masyarakat umum.</li>
          <li>Mewujudkan sinergi Politeknik Negeri Jember dengan potensi dunia usaha sehingga dapat menumbuhkembangkan
            IPTEK sesuai kebutuhan.</li>
          <li>MMendorong kemanfaatan potensi bisnis akademik dan non akademik yang bernilai komersial.</li>
        </ul>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <h2 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">Sasaran
        </h2>
        <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
          <li>Melakukan inkubasi untuk pengembangan wirausaha baru yang mandiri dan professional.</li>
          <li>Meningkatkan kinerja tenant yang dicirikan dengan meningkatnya volume usaha, nilai tambah, produktivitas
            dan penyerapan tenaga kerja.</li>
          <li>Meningkatkan kualitas layanan Inkubator Bisnis, memaksimalkan semangat kewirausahaan mahasiswa POLIJE.
          </li>
          <li>Menstimulasi dan menggalang partisipasi berbagai pihak dalam mengembangkan wirausaha melalui Inkubator
            Bisnis dan KWU POLIJE.</li>
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
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Struktur Kepengurusan
          IBKWU</h2>
        <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?</p>
        <p class="font-medium text-md text-secondary md:text-lg text-justify mb-2 mt-16">IBKWU Politeknik Negeri
          Jember memiliki struktur kepengurusan sesuai Surat Keputusan Direktur Politeknik Negeri Jember Nomor
          3131/PL17/KP/SK/2020 adalah sebagai berikut:</p>
        <ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
          <li><span class="font-semibold">Kepala</span> : Dr. Dhanang Eka Putra, SP, M.Sc</li>
          <li><span class="font-semibold">Sekretaris</span> : Hariyono Rakhmad, S.Pd, M.Kom</li>
          <li><span class="font-semibold">General Manajer</span> : Drs. Lukman Ekana Putra, P.Si., M. Si.</li>
          <li><span class="font-semibold">Manajer Teknologi Informasi</span> : Nugroho Setyo Wibowo, S.T., M. T.</li>
          <li><span class="font-semibold">Manajer Kemitraan</span> : Elly Antika, S.T., M. Kom.</li>
          <li><span class="font-semibold">Manajer Training & Business Class</span> : Mukhamad Angga Gumilang, S. Pd.,
            M. Eng.</li>
          <li><span class="font-semibold">Manajer Diseminasi Teknologi</span> : Rindha Retina Darah Pertami, S. P., M.
            Si.</li>
          <li><span class="font-semibold">Manajer Pengembangan Produk</span> : Silvia Oktavia Nur Yudiastuti, S.T.P.,
            M.T.P.</li>
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

@endsection