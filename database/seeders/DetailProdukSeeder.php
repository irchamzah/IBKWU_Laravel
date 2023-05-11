<?php

namespace Database\Seeders;

use App\Models\DetailProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DetailProduk::create([
            'detail_produk_img' => 'RedVelvet-1.jpg',
            'judul_h1' => 'Red Velvet Soft Crunchy Cookies',
            'slug' => 'red-velvet-soft-crunchy-cookies',
            'link_yt' => '',
            'deskripsi_p1' => '<p><strong>Soft Crunchy Cookies</strong></p><p><i>Red Velvet Soft Crunchy Cookies</i> merupakan sebuah produk inovasi kue kering, khususnya cookies yang memiliki tampilan warna amat menggoda yaitu merah hati dan memiliki aroma harum cokelat khas <i>red velvet</i> yang berpadu dengan <i>dark chocolate</i> atau coklat hitam. Selain itu terdapat subtitusi tepung kedelai di dalamnya, sehingga membuat tekstur cookies kami menjadi semakin unik, menarik, dan mengandung protein yang tinggi. Tekstur yang dimiliki cookies ini, yaitu <i>crispy</i> di luar dan lembut di dalam, saat digigit tidak terlalu keras dan dalamnya sangat lembut, ditambah dengan tingkat kemanisan yang pas. Dari segi tekstur yang unik, rasa yang enak, dan tidak terlalu manis membuat konsumen tidak mudah merasa bosan, dan juga membuat cookies ini dapat dinikmati segala kalangan, seperti lansia dan calon pelanggan yang tidak suka manis. Produk ini dibuat dengan bahan-bahan berkwalitas, tanpa pengawet, dan kami menyediakannya selalu dalam kondisi fresh, sehingga kualitas dari produk kue kering kami <i>Red Velvet Soft Crunchy Cookies</i> dapat dijamin, baik dari segi aroma, cita rasa, maupun teksturnya.</p><p>&nbsp;</p><p><strong>Manfaat yang dapat diperoleh dari kandungan Red Velvet Cookies:</strong></p><p>1. Tepung kedelai mengandung gizi seperti protein tinggi, serat, lemak tak jenuh, lechitin dan kalsium yang dibutuhkan oleh tubuh.</p><p>2. Coklat Hitam (Dark Chocolate) memiliki kandungan psycho active yang bermanfaat untuk memperbaiki mood dan memunculkan perasaan bahagia.</p><p>&nbsp;</p><p><strong>Keunggulan Red Velvet Cookies:</strong></p><p>1. Rasa yang unik dengan tekstur lembut di dalam crunchnya dan manisnya.</p><p>2. Tampilan yang menarik dengan kemasan estetik, praktis dan ekonomis.</p><p>3. Produk selalu fresh dan tahan lama tanpa bahan pengawet.</p><p>4. Menggunakan bahan premium dan berkualitas serta campuran tepung kedelai yang mengandung nilai gizi tinggi.</p><p>5. Cocok untuk semua kalangan dan tentunya menyehatkan.</p><p>&nbsp;</p><p><strong>Potensi Pasar Red Velvet Cookies:</strong></p><p>Semua kalangan masyarakat mulai usia 1,5 tahun – 70 tahun, anak-anak, kalangan pelajar, karyawan, pedagang, guru atau tenaga pendidik, hingga wirausahawan.</p><p>&nbsp;</p><p><strong>Contact Person:</strong></p><p>Instagram: @rvsccookies.id</p><p>Email:&nbsp;<a href="mailto:rvsccookies@gmail.com">rvsccookies@gmail.com</a></p><p>WA: 082-245-896-948</p><p>&nbsp;</p><p><strong>Alamat</strong>: Singosari, Malang</p>',
            'kategori_galeri_id' => '1'
        ]);

        //2
        DetailProduk::create([
            'detail_produk_img' => 'MusaeChips-1.jpg',
            'judul_h1' => 'Keripik Pisang Oven Rendah Lemak',
            'slug' => 'keripik-pisang-oven-rendah-lemak',
            'link_yt' => '',
            'deskripsi_p1' => '<p><strong>PROFIL TENANT</strong></p><p>Nama Brand : Musae Chips</p><p>Nama Pemilik : Fathurrohman, Rifrinda Afianti Maghfiroh</p><p>Alamat : Jl. Letjen Suprapto Gang 6 No 50 Kebonsari – Sumbersari – Jember&nbsp;</p><p>Contact :</p><p>- +62 858-0421-1994</p><p>-&nbsp;<a href="mailto:musaechips@gmail.com">musaechips@gmail.com</a></p><p>-&nbsp;<a href="http://www.musaechips.com">http://www.musaechips.com</a></p><p>- cv. Sunresist indonesia</p><p>&nbsp;</p><p><strong>DESKRIPSI PRODUK</strong></p><p>Musae Chips adalah sebuah brand keripik pisang oven buatan asli Indonesia. Musae chips khusus menggunakan pisang raja nagnka karena mempunyai tekstur rasa yang tidak dimiliki pisang lainnya. Dengan irisan yang bergerigi seperti potongan kentang atau zigzag membua bumbu menempel lebih banyak, dan bebas minyak rendah lemak karena proses khusus di oven untuk menurunkan kadar minyak.</p><p>&nbsp;</p><p><strong>TARGET PASAR</strong></p><p>- Mahasiswa</p><p>- Pegawai/karyawan</p><p>- Perempuan Usia 19-30</p><p>- Wisatawan</p><p>&nbsp;</p><p><strong>KELEBIHAN PRODUK</strong></p><p><strong>Proses di Oven</strong></p><p>Musae Chips dengan proses finishing di oven membuat tekstur keripik lebih kering dan lebih renyah.</p><p><strong>Rendah lemak</strong></p><p>Dari hasil uji Lab, di bangdingkan produk serupa Musae Chips lebih rendah Lemak dengan nilai AKG 25% yaitu 16,86 dan lebih kaya Protein.</p><p><strong>Bentuk Unik</strong></p><p>Dengan Potongan zigzag atau bergerigi membuat berbeda dari pada keripik pisang pada umumnya, dan bumbu lebih tebal dan nikmat.</p><p><strong>Kemasan Menarik</strong></p><p>Yap! Betul banget, kemasan Musae Chips selain menarik dan lucu, juga bisa kita bawa ke mana saja. Masuk dalam tas atau kita bawa berkedara? Aman pastinya!</p><p>&nbsp;</p><p><strong>HARAPAN DARI BM</strong></p><p>- Mendapatkan modal untuk peningkatan produksi</p><p>- Mendapatkan saluran distribusi baru</p><p>- Scale up menejemen perusahaan</p><p>- Penguatan sertifikasi produk</p>',
            'kategori_galeri_id' => '1'
        ]);

        //3
        DetailProduk::create([
            'detail_produk_img' => 'macarina-1.jpg',
            'judul_h1' => 'Macarina Macaroni Nagih',
            'slug' => 'macarina-macaroni-nagih',
            'link_yt' => '',
            'deskripsi_p1' => '<p><strong>Nama Perusahaan :</strong></p><p>CV.Macarindo Berkah Group</p><p>&nbsp;</p><p><strong>Nama pemilik :</strong></p><p>Helmi Zamrudiansyah</p><p>&nbsp;</p><p><strong>Alamat :</strong></p><p>Graha Macarina Jl Sriwijaya XX No.11 Karangrejo</p><p>Sumbersari Jember.</p><p>No telp : 081217757777,</p><p>Email :&nbsp;<a href="mailto:helmiceo@macarina.id">helmiceo@macarina.id</a></p><p>&nbsp;</p><p><strong>Deskripsi produk:</strong></p><p>Macarina adalah sebuah usaha camilan/makanan ringan macaroni kering, dimana kami mencari cara (riset) untuk membuat tekstur makaroni kering yang renyah.</p><p>Kami juga mencari bumbu dari supplier yang sudah lolos BPOM dn Halal MUI tanpa mengoplos lagi dengan bahan berbahaya.</p><p>&nbsp;</p><p><strong>Keunggulan :</strong></p><p>- Makaroni renyah dan mudah dikunyah</p><p>- Tidak membuat serik ditenggorokan saat dimakan</p><p>- Ada berbagai variant rasa dan pedas</p><p>- Memberikan kebebasan pada konsumen tentang (selera) takaran bumbu sehingga mudah untuk dijual</p><p>&nbsp;</p><p><strong>Target Pasar :</strong></p><p>- Mahasiswa</p><p>- Pecinta kuliner pedas</p><p>- Anak anak hits</p><p>&nbsp;</p><p><strong>Harapan dari BM :</strong></p><p>Dapat menambah keilmuan dan meminimalisir kesalahan dalam melangkah untuk memperluas pasar ke tingkat Global</p>',
            'kategori_galeri_id' => '1'
        ]);

        //4
        DetailProduk::create([
            'detail_produk_img' => 'GT-BumbuHerbal-1.jpg',
            'judul_h1' => 'Bumbu Racik Herbal Siap Saji “Dukun Masak”',
            'slug' => 'bumbu-racik-herbal-siap-saji-dukun-masak',
            'link_yt' => '',
            'deskripsi_p1' => '<p><strong>INOVATOR</strong></p><p>Prof. Dr. Sucihatiningsih, DWP., M.Si</p><p>&nbsp;</p><p><strong>LEMBAGA PENGUSUL</strong></p><p>LPPM Universitas Negeri Semarang</p><p>Kampus Sekaran, Gunung Pati, Semarang 50229 Jawa Tengah</p><p>Tel. (024) 8508089</p><p>&nbsp;</p><p><strong>LATAR BELAKANG</strong></p><p>Seiring dengan meningkatnya kesadaran tentang healthy life style, konsumsi produk pertanian pangan dan hortikultur juga mengalami peningkatan. Ditjen Hortikultura mengungkapkan bahwa target produksi hortikultura di Indonesia sebanyak 18.671.100 ton untuk buah, 11.591.900 ton sayur dan 454.200 ton untuk komoditas biofarma. Tingkat pertumbuhan penduduk dan pendapatan, berpengaruh terhadap trend diversifikasi dan preferensi pangan masyarakat, perubahan harga, serta areal lahan garapan yang tersedia.</p><p>Program ini bertujuan untuk penguatan pangan lokal yang implementatif melalui pendayagunaan tanaman pangan dan horikultura (buah, sayur, dan biofarma) menjadi sebuah produk inovasi seperti bumbu racik herbal siap saji. Program ini mencoba mengembangkan sinergi antara peran universitas sebagai pusat penelitian dan dunia usaha. Sehingga diharapkan produk inovatif dapat menjadi salah satu income generating untuk perguruan tinggi.</p><p>&nbsp;</p><p><strong>KEUNGGULAN INOVASI PRODUK</strong></p><p>1. Diolah secara higienis yang telah memenuhi standar proses menurut CPMB (Cara Produksi Makanan yang Baik) yang telah ditetapkan oleh Badan POM maupun Kementerian Kesehatan.</p><p>2. Diolah dengan peralatan modern dan diproses dengan cepat dan aman agar dapat diperoleh kualitas yang mampu mempertahankan kesegaran alami bahan-bahan asli Indonesia untuk tetap menjaga cita rasa masakan.</p><p>3. Dibebashamakan (sterilisasi) agar produk tetap memiliki khasiat alami bagi kesehatan tubuh.</p><p>4. Dikemas dengan kemasan yang kedap udara dengan berbagai kemasan yang telah disesuaikan sesuai dengan kebutuhan konsumsi sehari-hari.</p><p>5. Telah memiliki beberapa persyaratan legal yang menjamin mutu higienis dan kualitas produk.</p><p>&nbsp;</p><p><strong>MANFAAT PRODUK, DAMPAK SOSIAL, DAN DAMPAK EKONOMI</strong></p><p>Adanya kesadaran untuk kembali menggunakan material herbal alami khas Indonesia maka dengan demikian masyarakat telah berperan aktif dalam melestarikan warisan leluhur Indonesia. Industri bumbu racik herbal akan membawa dampak pada penyerapan tenaga kerja, sehingga secara tidak langsung kesejahteraan masyarakat sekitar juga akan meningkat.</p><p>&nbsp;</p><p><strong>POTENSI PASAR</strong></p><p>Karakteristik masyarakat Indonesia yang selalu berkumpul dengan menyantap hidangan serta berkembangnya kota-kota besar yang menuntut masyarakat bekerja secara praktis merupakan potensi pasar yang baik.</p><p>&nbsp;</p><p><strong>SPESIFIKASI PRODUK</strong></p><p>Herbal alami yang digunakan seperti pekak, habbatusaudah, kapulaga, adas, tempayang, akar angin yang bermanfaat bagi kesehatan tubuh serta menguatkan cita rasa masakan.</p><p>Terdapat empat varian rasa bumbu racik herbal, yakni rasa gule, rendang, soto dan kari. Harga Jual produk harga jual per sachet kemasan 10 gr bumbu cepa saji berkisar Rp 5.000 – 6.000 / sachet (dalam 1 Dos packing bumbu berisi 20 sachet).</p><p>&nbsp;</p><p><strong>Tingkat Kandungan Dalam Negeri (% TKDN)</strong> : 100%</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>STATUS PATEN</strong> : Dalam Proses Pengajuan</p>',
            'kategori_galeri_id' => '1'
        ]);

        //5
        DetailProduk::create([
            'detail_produk_img' => 'GT-Samber Mbegor.jpg',
            'judul_h1' => 'Sambel Mbegor',
            'slug' => 'sambel-mbegor',
            'link_yt' => '',
            'deskripsi_p1' => '<p><strong>DESKRIPSI</strong></p><p>Sambal kemasan praktis yang mengangkat resep-resep tradisional dengan keunikan aroma dan rasa yang berbeda dengan sambel yang lain karena Sambal Asap Mbegor diproses melalui tahapan pengasapan.</p><p>&nbsp;</p><p><strong>VARIAN PRODUK</strong></p><p>Tuna Asap, Cumi Asap, Udang Asap, Pari Asap, Teri, Bawang, Bajak dan Terasi Limau</p><p>&nbsp;</p><p><strong>MANFAAT</strong></p><p>- Menyelesaikan masalah penyuka sambel yang tidak bisa membuat sambel</p><p>- Menjadi Lauk teman makan cukup dengan nasi putih saja</p><p>&nbsp;</p><p><strong>KEUNGGULAN</strong></p><p>- Rasa dan aroma yang unik</p><p>- Tahan 12 bulan dalam kemasan</p><p>- Dapat menjadi bumbu olahan lain seperti aneka tumis dan nasi goreng.</p><p>&nbsp;</p><p><strong>SPESIFIKASI</strong></p><p>- Praktis sehingga mudah dibawa kemana-mana</p><p>- Netto 150g.</p><p>- Kemasan botol pet kuat dan tidak mudah pecah.</p><p>- Ready to eat.</p><p>- Dapat digunakan sebagai bumbu masakan.</p><p>- Tanpa MSG</p><p>- Level pedas = sedang</p><p>&nbsp;</p><p><strong>TARGET PASAR</strong></p><p>- Wanita usia 25-40 tahun</p><p>- Wanita Pekerja</p><p>- Perkotaan Kelas menengah atas</p><p>- Tidak hobby masak</p><p>&nbsp;</p><p><strong>ALAMAT</strong></p><p>Jalan Kertanegara No. 18 Jember Jawa Timur 68133</p><p>&nbsp;</p><p><strong>KONTAK</strong></p><p>+(62) 851 0174 7899</p><p>+(62) 896 3909 9000</p><p><a href="mailto:sambel.mbegor@gmail.com">sambel.mbegor@gmail.com</a></p><p>@sambelasapmbegor</p>',
            'kategori_galeri_id' => '1'
        ]);
    }
}
