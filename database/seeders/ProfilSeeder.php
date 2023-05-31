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
      'tentang_h1' => 'Sejarah dan Pendirian IBKWU',
      'tentang_p1' => '<p>Inkubator Bisnis dan Kewirausahaan (IBKWU) Politeknik Negeri Jember dibentuk berdasarkan Keputusan Direktur Politeknik Negeri Jember Nomor 11096/PL17/KP/SK/2015 pada 4 Desember 2015.</p><p>&nbsp;</p><p>Badan organisasi ini dibentuk untuk memberikan layanan kegiatan berupa pengembangan wirausaha baru yang mandiri dan professional serta memaksimalkan spirit kewirausahaan sehingga bermanfaat bagi masyarakat dan civitas Politeknik.</p><p>&nbsp;</p><p>Unit IBKWU diharapkan mampu meningkatkan peran dan fungsinya untuk menumbuh-kembangkan teknologi inovatif yang tepat guna sehingga berdampak bagi masyarakat luas, dan menjadi sarana penunjang dalam melaksanakan Tri Dharma.</p>',
      'visi_h1' => 'Visi dan Misi IBKWU',
      'visi_h2' => 'Visi',
      'visi_p1' => '<p>- Menjalankan inkubasi sesuai standar manajemen mutu dan ISO 9001 – 2008.</p><p>- Memberikan layanan kepada masyarakat, mahasiswa dan alumni berbagai perguruan tinggi untuk memulai usaha sehingga tumbuh dan berkembang secara mandiri.</p>',
      'visi_h3' => 'Misi',
      'visi_p2' => '<p>- Memberikan layanan pra inkubasi – masa inkubasi – pasca inkubasi secara terstruktur dan berkelanjutan dengan masa inkubasi minimal 3 tahun.</p><p>- Memberikan layanan inkubasi <i>in-wall</i> dan <i>out-wall</i> baik secara langsung maupun virtual dalam bentuk aplikasi dan inovasi IPTEK, motivasi, peningkatan kekuatan personal, pengetahuan, keterampilan teknis, manajerial dan kepemimpinan melalui kegiatan penyuluhan, pelatihan, pendidikan, pendampingan dan business coach.</p><p>- Memberi layanan transfer pengetahuan dan teknologi tepat guna maupun pengembangan hak kekayaan intelektual serta hak cipta terhadap produk dan bisnis.</p><p>- Memberikan layanan yang berbasis pada nilai – nilai kebenaran perkataan, nurani dan pikiran.</p><p>- Memberikan layanan dengan prinsip etika bisnis, komitmen dua arah, berorientasi tujuan, dan fokus untuk sukses.</p><p>- Meningkatkan reputasi dan pencitraan terhadap layanan inkubasi.</p><p>- Mengembangkan kapabilitas dan kompetensi team work inkubator secara professional dan berdaya saing.</p>',
      'tujuan_h1' => 'Tujuan dan Sasaran IBKWU',
      'tujuan_h2' => 'Tujuan',
      'tujuan_p1' => '<p>1. Menumbuhkembangkan budaya kewirausahaan di lingkungan Perguruan Tinggi dan Masyarakat umum.</p><p>2. Mewujudkan sinergi Politeknik Negeri Jember dengan potensi dunia usaha sehingga dapat menumbuhkembangkan IPTEK sesuai kebutuhan.</p><p>3. Mendorong kemanfaatan potensi bisnis akademik dan non akademik yang bernilai komersial.</p>',
      'tujuan_h3' => 'Sasaran',
      'tujuan_p2' => '<p>1. Melakukan inkubasi untuk pengembangan wirausaha baru yang mandiri dan professional.</p><p>2. Meningkatkan kinerja tenant yang dicirikan dengan meningkatnya volume usaha, nilai tambah, produktivitas dan penyerapan tenaga kerja.</p><p>3. Meningkatkan kualitas layanan Inkubator Bisnis, memaksimalkan semangat kewirausahaan mahasiswa POLIJE.</p><p>4. Menstimulasi dan menggalang partisipasi berbagai pihak dalam mengembangkan wirausaha melalui Inkubator Bisnis dan KWU POLIJE.</p>',
      'struktur_h1' => 'Struktur Kepengurusan IBKWU',
      'struktur_p1' => '<p>IBKWU Politeknik Negeri Jember memiliki struktur kepengurusan sesuai Surat Keputusan Direktur Politeknik Negeri Jember Nomor 3131/PL17/KP/SK/2020 adalah sebagai berikut:</p><p><strong>- Kepala</strong> : Dr. Dhanang Eka Putra, SP, M.Sc</p><p><strong>-&nbsp;Sekretaris</strong> : Hariyono Rakhmad, S.Pd, M.Kom</p><p><strong>-&nbsp;General Manajer</strong> : Drs. Lukman Ekana Putra, P.Si., M. Si.</p><p><strong>-&nbsp;Manajer Teknologi Informasi</strong> : Nugroho Setyo Wibowo, S.T., M. T.</p><p><strong>-&nbsp;Manajer Kemitraan</strong> : Elly Antika, S.T., M. Kom.</p><p><strong>-&nbsp;Manajer Training &amp; Business Class </strong>: Mukhamad Angga Gumilang, S. Pd., M. Eng.</p><p><strong>-&nbsp;Manajer Diseminasi Teknologi </strong>: Rindha Retina Darah Pertami, S. P., M. Si.</p><p><strong>-&nbsp;Manajer Pengembangan Produk</strong>: Silvia Oktavia Nur Yudiastuti, S.T.P., M.T.P.</p>',
      'struktur_img1' => 'struktur_kepengurusan_ibkwu.png',
      'sdm_h1' => 'SDM Pendamping UMKM',
      'sdm_p1' => '<p>IBKWU Politeknik Negeri Jember memiliki SDM Pendamping UMKM sebagai berikut :</p><p>1. Arifningtyas<br>2. Eko Nuryahya<br>3. Suci Hastuti<br>4. Mohamad Nasrudin Latif<br>5. Eva Fahmadia Jilan Maulida<br>6. Lukman Ekana Putra<br>7. Silvia Oktavia Nur Yudiastuti<br>8. Rindha Rentina Darah Pertami<br>9. Alinea Dwi Elisanti<br>10. David K Susilo<br>11. Dedik Hevea Ermanu<br>12. Dhanang Eka Putra<br>13. Hariyono Rakhmad<br>14. Kartika Adi<br>15. Elly Antika<br>16. Huda Ahmad Hudori<br>17. Deltaningtyas Tri Cahyaningrum<br>18. Yohan Yuanta<br>19. Financia Mayasari<br>20. Putri Ratu Syarifah<br>21. Suwartono<br>22. Mukhamad Angga Gumilang<br>23. Uyun Erma Malika<br>24. Ujang Suryadi<br>25. Risse Entikaria Rachmanita</p>'
    ]);
  }
}
