@extends('admin.layouts.app')

@section('title', 'Edit Profil')
@section('menu-1', 'border-gray-800')
@section('menu-2', 'border-gray-800')
@section('menu-3', 'border-purple-500 text-purple-500')
@section('menu-4', 'border-gray-800')
@section('content')

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <a href="/admin/halaman">
            <button class="bg-blue-600 text-white rounded-lg p-5 hover:bg-blue-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Kembali</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->

        <!--Metric Card-->
        <a href="/admin/halaman">
            <button class="bg-green-600 text-white rounded-lg p-5 hover:bg-green-700">
                <div class="flex flex-row items-center justify-center">
                    <div class="text-right md:text-center">
                        <h2 class="font-bold uppercase">Simpan Perubahan</h2>
                    </div>
                </div>
            </button>
        </a>
        <!--/Metric Card-->
    </div>
</div>

<div class="flex flex-wrap">
    <div class="w-full p-6">
        <div class=" rounded-lg shadow-xl p-5">

            {{-- Tentang Section Start --}}
            <section id="tentang" class="pt-36 pb-16 dark:bg-dark">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-5xl mx-auto text-center mb-6">
                            <h4 class="font-semibold text-lg text-primary mb-2">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Sejarah dan Pendirian" required autocomplete="name" autofocus>
                            </h4>
                            <h2 class="font-bold text-dark text-3xl mb-6 sm:text-4xl lg:text-5xl dark:text-white"><input
                                    type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Sejarah dan Pendirian IBKWU" required autocomplete="name"
                                    autofocus>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg text-justify indent-8 mb-2">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name" autofocus>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eos blanditiis sed non aut error illum explicabo quaerat consequuntur libero consectetur quis illo quod ut rerum repellat magni nulla laudantium hic maiores atque, eius quibusdam optio. At fuga facere impedit, neque saepe quia dolorum quis error nemo qui nobis doloribus fugit sit molestias harum. Non cupiditate numquam sit. Nihil voluptatem, laborum, architecto debitis hic animi reprehenderit illo minus explicabo nam dolore obcaecati laudantium excepturi suscipit ea quis dolor est. Aliquid omnis expedita facere quam assumenda tenetur quisquam voluptatibus, vitae ipsa minus libero consequuntur nihil impedit, unde et accusamus nostrum at?
                                </textarea>
                            </p>
                        </div>
                    </div>

                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mb-12 p-4 md:w-1/2">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
                                <input type="file"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('image') is-invalid @enderror"
                                    name="image" accept="image/*">
                            </div>
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Sejarah IBKWU" required autocomplete="name" autofocus>
                            </h3>
                            <p class="font-medium text-base text-secondary text-justify">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name"
                                    autofocus>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorem, adipisci cumque aliquid est excepturi repellendus non reiciendis quas qui?</textarea>
                            </p>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <img src="/dist/img/galeri/macarina-2.jpg" alt="" width="w-full">
                                <input type="file"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('image') is-invalid @enderror"
                                    name="image" accept="image/*">
                            </div>
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white text-center">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Pendirian IBKWU" required autocomplete="name" autofocus>
                            </h3>
                            <p class="font-medium text-base text-secondary text-justify">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name"
                                    autofocus>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nulla consequuntur blanditiis architecto suscipit mollitia dolore quas beatae. Ex, dolorem?</textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Tentang Section End --}}

            {{-- Visi dan Misi Section Start --}}
            <section id="visi" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-800">
                <div class="container">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="max-w-5xl mx-auto text-center mb-10">
                                <h4 class="font-semibold text-lg text-primary mb-2">
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" value="Visi dan Misi" required autocomplete="name" autofocus>
                                </h4>
                                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" value="Visi dan Misi IBKWU" required autocomplete="name" autofocus>
                                </h2>
                                <p class="font-medium text-md text-secondary md:text-lg"><textarea name="name" id="name"
                                        cols="30" rows="10" type="text"
                                        class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        required autocomplete="name" autofocus>Lorem ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat
                                    laboriosam
                                    voluptate?</textarea></p>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full px-4 lg:w-1/2">
                                <h2
                                    class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" value="Visi" required autocomplete="name" autofocus>
                                </h2>
                                <ul
                                    class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                    <textarea name="name" id="name" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        required autocomplete="name" autofocus>
                                    <li>Menjalankan inkubasi sesuai standar manajemen mutu dan ISO 9001 – 2008.</li>
                                    <li>Memberikan layanan kepada masyarakat, mahasiswa dan alumni berbagai perguruan
                                        tinggi
                                        untuk memulai
                                        usaha sehingga tumbuh dan berkembang secara mandiri.</li></textarea>
                                </ul>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <h2
                                    class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                    <input type="text" id="name"
                                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        name="name" value="Misi" required autocomplete="name" autofocus>
                                </h2>
                                <ul
                                    class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                    <textarea name="name" id="name" cols="30" rows="10" type="text"
                                        class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                        required autocomplete="name" autofocus>
                                    <li>Memberikan layanan pra inkubasi – masa inkubasi – pasca inkubasi secara
                                        terstruktur
                                        dan berkelanjutan
                                        dengan masa inkubasi minimal 3 tahun.</li>
                                    <li>Memberikan layanan inkubasi in-wall dan out-wall baik secara langsung maupun
                                        virtual
                                        dalam bentuk
                                        aplikasi dan inovasi IPTEK, motivasi, peningkatan kekuatan personal,
                                        pengetahuan,
                                        keterampilan teknis,
                                        manajerial dan kepemimpinan melalui kegiatan penyuluhan, pelatihan, pendidikan,
                                        pendampingan dan
                                        business coach.</li>
                                    <li>Memberi layanan transfer pengetahuan dan teknologi tepat guna maupun
                                        pengembangan
                                        hak kekayaan
                                        intelektual serta hak cipta terhadap produk dan bisnis.</li>
                                    <li>Memberikan layanan yang berbasis pada nilai – nilai kebenaran perkataan, nurani
                                        dan
                                        pikiran.</li>
                                    <li>Memberikan layanan dengan prinsip etika bisnis, komitmen dua arah, berorientasi
                                        tujuan, dan fokus
                                        untuk sukses.</li>
                                    <li>Meningkatkan reputasi dan pencitraan terhadap layanan inkubasi.</li>
                                    <li>Mengembangkan kapabilitas dan kompetensi team work inkubator secara professional
                                        dan
                                        berdaya saing.
                                    </li></textarea>
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
                            <h4 class="font-semibold text-lg text-primary mb-2">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Tujuan dan Sasaran" required autocomplete="name" autofocus>
                            </h4>
                            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Tujuan dan Sasaran IBKWU" required autocomplete="name" autofocus>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name" autofocus>Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing
                                elit. Eveniet ipsam quia quasi earum. Minus iste consequuntur deleniti obcaecati, fugit
                                deserunt!</textarea>
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full px-4 lg:w-1/2">
                            <h2
                                class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Tujuan" required autocomplete="name" autofocus>
                            </h2>
                            <ul
                                class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name" autofocus>
                                <li>Menumbuhkembangkan budaya kewirausahaan di lingkungan Perguruan Tinggi dan
                                    Masyarakat
                                    umum.</li>
                                <li>Mewujudkan sinergi Politeknik Negeri Jember dengan potensi dunia usaha sehingga
                                    dapat
                                    menumbuhkembangkan
                                    IPTEK sesuai kebutuhan.</li>
                                <li>MMendorong kemanfaatan potensi bisnis akademik dan non akademik yang bernilai
                                    komersial.
                                </li></textarea>
                            </ul>
                        </div>
                        <div class="w-full px-4 lg:w-1/2">
                            <h2
                                class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-12 dark:text-white text-center">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Sasaran" required autocomplete="name" autofocus>
                            </h2>
                            <ul
                                class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name" autofocus>
                                <li>Melakukan inkubasi untuk pengembangan wirausaha baru yang mandiri dan professional.
                                </li>
                                <li>Meningkatkan kinerja tenant yang dicirikan dengan meningkatnya volume usaha, nilai
                                    tambah, produktivitas
                                    dan penyerapan tenaga kerja.</li>
                                <li>Meningkatkan kualitas layanan Inkubator Bisnis, memaksimalkan semangat kewirausahaan
                                    mahasiswa POLIJE.
                                </li>
                                <li>Menstimulasi dan menggalang partisipasi berbagai pihak dalam mengembangkan wirausaha
                                    melalui Inkubator
                                    Bisnis dan KWU POLIJE.</li></textarea>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Tujuan dan Sasaran Section End --}}

            {{-- Struktur Kepengurusan Section Start --}}
            <section id="struktur" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-800">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="max-w-5xl mx-auto text-center mb-10">
                            <h4 class="font-semibold text-lg text-primary mb-2">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Struktur Kepengurusan" required autocomplete="name" autofocus>
                            </h4>
                            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">
                                <input type="text" id="name"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    name="name" value="Struktur Kepengurusan IBKWU" required autocomplete="name"
                                    autofocus>
                            </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">
                                <textarea name="name" id="name" cols="30" rows="10" type="text"
                                    class="h-32 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                    required autocomplete="name" autofocus>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing
                                elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam
                                voluptate?</textarea>
                            </p>
                            <textarea name="name" id="name" cols="30" rows="10" type="text"
                                class="h-96 block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                                required autocomplete="name" autofocus>
                            <p class="font-medium text-md text-secondary md:text-lg text-justify mb-2 mt-16">IBKWU
                                Politeknik Negeri
                                Jember memiliki struktur kepengurusan sesuai Surat Keputusan Direktur Politeknik Negeri
                                Jember Nomor
                                3131/PL17/KP/SK/2020 adalah sebagai berikut:</p>
                            <ul
                                class="list-disc font-medium text-base text-secondary mb-6 lg:text-lg lg:pl-6 text-justify">
                                <li><span class="font-semibold">Kepala</span> : Dr. Dhanang Eka Putra, SP, M.Sc</li>
                                <li><span class="font-semibold">Sekretaris</span> : Hariyono Rakhmad, S.Pd, M.Kom</li>
                                <li><span class="font-semibold">General Manajer</span> : Drs. Lukman Ekana Putra, P.Si.,
                                    M.
                                    Si.</li>
                                <li><span class="font-semibold">Manajer Teknologi Informasi</span> : Nugroho Setyo
                                    Wibowo,
                                    S.T., M. T.</li>
                                <li><span class="font-semibold">Manajer Kemitraan</span> : Elly Antika, S.T., M. Kom.
                                </li>
                                <li><span class="font-semibold">Manajer Training & Business Class</span> : Mukhamad
                                    Angga
                                    Gumilang, S. Pd.,
                                    M. Eng.</li>
                                <li><span class="font-semibold">Manajer Diseminasi Teknologi</span> : Rindha Retina
                                    Darah
                                    Pertami, S. P., M.
                                    Si.</li>
                                <li><span class="font-semibold">Manajer Pengembangan Produk</span> : Silvia Oktavia Nur
                                    Yudiastuti, S.T.P.,
                                    M.T.P.</li>
                            </ul>
                                </textarea>
                        </div>
                    </div>

                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mb-12 p-4">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <img src="/dist/img/galeri/macarina-1.jpg" alt="" width="w-full">
                                <input type="file"
                                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('image') is-invalid @enderror"
                                    name="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Struktur Kepengurusan Section End --}}
        </div>
    </div>
</div>


<div class="flex flex-row flex-wrap flex-grow mt-2 opacity-0">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h class="font-bold uppercase text-gray-600">Graph</h>
            </div>
            <div class="p-5">
                <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-7"), {
                "type": "bar",
                "data": {
                    "labels": ["January", "February", "March", "April"],
                    "datasets": [{
                        "label": "Page Impressions",
                        "data": [10, 20, 30, 40],
                        "borderColor": "rgb(255, 99, 132)",
                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                    }, {
                        "label": "Adsense Clicks",
                        "data": [5, 15, 10, 30],
                        "type": "line",
                        "fill": false,
                        "borderColor": "rgb(54, 162, 235)"
                    }]
                },
                "options": {
                    "scales": {
                        "yAxes": [{
                            "ticks": {
                                "beginAtZero": true
                            }
                        }]
                    }
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Graph</h2>
            </div>
            <div class="p-5">
                <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-0"), {
                "type": "line",
                "data": {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Views",
                        "data": [65, 59, 80, 81, 56, 55, 40],
                        "fill": false,
                        "borderColor": "rgb(75, 192, 192)",
                        "lineTension": 0.1
                    }]
                },
                "options": {}
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Graph</h2>
            </div>
            <div class="p-5">
                <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-1"), {
                "type": "bar",
                "data": {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Likes",
                        "data": [65, 59, 80, 81, 56, 55, 40],
                        "fill": false,
                        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                        "borderWidth": 1
                    }]
                },
                "options": {
                    "scales": {
                        "yAxes": [{
                            "ticks": {
                                "beginAtZero": true
                            }
                        }]
                    }
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
            </div>
            <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-4"), {
                "type": "doughnut",
                "data": {
                    "labels": ["P1", "P2", "P3"],
                    "datasets": [{
                        "label": "Issues",
                        "data": [300, 50, 100],
                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                    }]
                }
            });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>


</div>
@endsection