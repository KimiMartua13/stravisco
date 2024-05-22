@extends('user/main')

@section('main')
    <div class="about">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-smkn2.jpeg" class="d-block w-100 img-fluid" alt="Gedung SMKN2" style="height: 800px">
                </div>
                <div class="carousel-item active">
                    <img src="/img/gedung-smkn2.jpeg" class="d-block w-100 img-fluid" alt="Gedung SMKN2"
                        style="height: 800px">
                </div>
                <div class="carousel-item active">
                    <img src="/img/gedung-smkn2.jpeg" class="d-block w-100 img-fluid" alt="Gedung SMKN2"
                        style="height: 800px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="stravisco-guru">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="guru-title mt-80">
                        <h1 class="text-center">About</h1>
                    </div>
                </div>
            </div>

            <div class="row stravisco-kepsek-photo justify-content-center">
                <div class="col-lg-4">
                    <img src="/img/B.AGUS_WIMBADI__M.Pd.png" class="img-fluid potrait" alt="Kepala Sekolah">
                    <h1>B. AGUS WIMBADI, M.Pd.</h1>
                    <p>Kepala Sekolah SMKN 2 Kota Bekasi</p>
                </div>
            </div>
            <div class="row justify-content-center about-text">
                <div class="col-lg-12">
                    <strong>Sejarah SMK Negeri 2 Kota Bekasi</strong> <br>

                    SMK Negeri 2 Kota Bekasi didirikan pada tahun 2004, berdasarkan surat keputusan Wali kota Bekasi nomor
                    421/1985-Disdik/IX/2004, walau sudah mempunyai izin operasional sejak 1985

                    Sejak berdirinya SMK Negeri 2 Kota Bekasi telah dipimpin oleh beberapa Kepala Sekolah, yaitu : <br>

                    1. Ajim Kanit, S.Pd, MM (2004-2005) <br>
                    2. Chaerudin ( 2005-2008) <br>
                    3. I. Made Supriatna, S.Pd, M,Si (2008-2012) <br>
                    4. Sugiyono, MM ( 2012-2015) <br>
                    5. Maman Sudiaman, S.Pd (2015) <br>
                    6. Agus Setiawan, S.Pd, M.Si (2015-2021) <br>
                    7. Agus Wimbadi, M.Pd ( 2021- sekarang)
                </div>
            </div>
            <div class="row justify-center-center about-text">
                <div class="col-lg-12">
                    <br><strong>Visi Sekolah :</strong> <br>
                    Unggul Berkarakter dan Berwawasan Global (Uber 2G)
                </div>
            </div>
            <div class="row justify-center-center about-text">
                <div class="col-lg-12">
                    <br><strong>Identitas SMK Negeri 2 Kota Bekasi</strong> <br>
                    SMK Negeri 2 Kota Bekasi adalah salah satu sekolah menengah kejuruan yang berada di Kota Bekasi, Jawa
                    Barat.

                    Sekolah ini terletak di Kelurahan Ciketing Udik, Kecamatan Bantar Gebang, Kota Bekasi. Sekolah ini pun
                    hanya berjarak 200 meter dari TPST Bantar Gebang, tetapi uniknya tidak tercium bau sampah di lingkungan
                    sekolah ini. Sekolah ini menjadi sekolah negeri terluas di Kota Bekasi dengan luas tanah mencapai 15.540
                    meter persegi atau sekitar 1,5 hektare, yang mana rencananya 30% lahan tersebut akan dijadikan hutan
                    kota.

                    SMK Negeri 2 Kota Bekasi mempunyai komitmen untuk selalu menjaga dan melestarikan lingkungan hidup di
                    lingkungan sekolah dan lingkungan sekitar. Sekolah ini pernah mendapat penghargaan Adiwiyata Mandiri
                    dari Kementrian Lingkungan Hidup pada tahun 2012.

                    Karena beralamat di Jalan Lapangan Bola Rawa Butun, masyarakat sekitar menyebut sekolah ini dengan
                    sebutan "Butun". Selain itu, sekolah ini juga mempunyai aturan rambut pelontos bagi siswa laki-laki,
                    maka sebutan Butun juga memiliki arti botak tiga tahun sesuai dengan lama pendidikan di SMK.
                </div>
            </div>
            <div class="row justify-center-center about-text">
                <div class="col-lg-12">
                    <br><strong>Informasi Kontak</strong> <br>
                    Alamat :
                    Jl. Lapangan Bola Rawa Butun <br>
                    Kel. Ciketing Udik – Kec. Bantar Gebang Bekasi <br>
                    Bekasi Kota <br>
                    Kode Pos 17153

                    Telepon : (021) 82597121 <br>
                    Fax : (021) 82597122 <br>
                    E-Mail : smkn2kotabekasi@gmail.com <br>

                    <br><strong>Nomor Identitas Sekolah</strong> <br> 
                    NPSN : 20231741 <br> 
                    NSS: 321026503002
                </div>
            </div>
        </div>
    </div>
@endsection
