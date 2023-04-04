<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'tentang_h1' => 'Sejarah dan Pendirian',
            'tentang_h2' => 'Sejarah dan Pendirian IBKWU',
            'tentang_p1' => '<p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">Lorem ipsum dolor sit,
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
            Quisquam libero eligendi culpa placeat cumque sapiente exercitationem minima ipsa hic laudantium?</p>',
            'tentang_img1' => 'MusaeChips-1.jpg',
            'tentang_h3' => 'Sejarah IBKWU',
            'tentang_p2' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas qui?',
            'tentang_img2' => 'MusaeChips-2.jpg',
            'tentang_h4' => 'Pendirian IBKWU',
            'tentang_p3' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nulla consequuntur blanditiis architecto suscipit mollitia dolore quas beatae. Ex, dolorem?',
            'visi_h1' => 'Visi dan Misi',
            'visi_h2' => 'Visi dan Misi IBKWU',
            'visi_p1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?',
            'visi_h3' => 'Visi',
            'visi_p2' => '<ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
            <li>Menjalankan inkubasi sesuai standar manajemen mutu dan ISO 9001 – 2008.</li>
            <li>Memberikan layanan kepada masyarakat, mahasiswa dan alumni berbagai perguruan tinggi untuk memulai
              usaha sehingga tumbuh dan berkembang secara mandiri.</li>
          </ul>',
            'visi_h4' => 'Misi',
            'visi_p3' => '<ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
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
          </ul>',
            'tujuan_h1' => 'Tujuan dan Sasaran',
            'tujuan_h2' => 'Tujuan dan Sasaran IBKWU',
            'tujuan_p1' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ipsam quia quasi earum. Minus iste consequuntur deleniti obcaecati, fugit deserunt!',
            'tujuan_h3' => 'Tujuan',
            'tujuan_p2' => '<ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
            <li>Menumbuhkembangkan budaya kewirausahaan di lingkungan Perguruan Tinggi dan Masyarakat umum.</li>
            <li>Mewujudkan sinergi Politeknik Negeri Jember dengan potensi dunia usaha sehingga dapat menumbuhkembangkan
              IPTEK sesuai kebutuhan.</li>
            <li>MMendorong kemanfaatan potensi bisnis akademik dan non akademik yang bernilai komersial.</li>
          </ul>',
            'tujuan_h4' => 'Sasaran',
            'tujuan_p3' => '<ul class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
            <li>Melakukan inkubasi untuk pengembangan wirausaha baru yang mandiri dan professional.</li>
            <li>Meningkatkan kinerja tenant yang dicirikan dengan meningkatnya volume usaha, nilai tambah, produktivitas
              dan penyerapan tenaga kerja.</li>
            <li>Meningkatkan kualitas layanan Inkubator Bisnis, memaksimalkan semangat kewirausahaan mahasiswa POLIJE.
            </li>
            <li>Menstimulasi dan menggalang partisipasi berbagai pihak dalam mengembangkan wirausaha melalui Inkubator
              Bisnis dan KWU POLIJE.</li>
          </ul>',
            'struktur_h1' => 'Struktur Kepengurusan',
            'struktur_h2' => 'Struktur Kepengurusan IBKWU',
            'struktur_p1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?',
            'struktur_p2' => '<h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Struktur Kepengurusan
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
          </ul>',
            'struktur_img1' => 'macarina-1.jpg'
        ]);
    }
}
