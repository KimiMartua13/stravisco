@extends('user/main')

@section('main')
    <div class="our-teacher">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tkj.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tsm.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
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
                        {{-- <h1 class="text-center">Kelas {{ $kelas->name }}</h1> --}}
                        <h1 class="text-center">Our Teacher's</h1>
                    </div>
                </div>
            </div>

            <div class="row stravisco-guru-photo justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                {{-- @foreach ($kumpulanKelas as $item)
                <div class="col-lg-6" style="margin-bottom: 20px;">
                    <a href="/kelas/{{ $item->getSingkatanNamaJurusan() }}/{{ $item->enkripsiId() }}">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach --}}
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/RAMDANI,S.Kom.jpg" class="img-fluid potrait" data-name="Ramdani S.Kom" data-position="Kepala Program Keahlian" alt="">
                    <h1>Ramdani S.Kom</h1>
                    <p>Kepala Program Keahlian</p>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/adam.jpg" class="img-fluid potrait" data-name="Wendi Hadittia S.Kom" data-position="Kepala Program Keahlian" alt="">
                    <h1>Wendi Hadittia S.Kom</h1>
                    <p>Kepala Program Keahlian</p>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/adam.jpg" class="img-fluid potrait" data-name="Deddy Maryanto S.Kom" data-position="Kepala Program Keahlian" alt="">
                    <h1>Deddy Maryanto S.Kom</h1>
                    <p>Kepala Program Keahlian</p>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/adam.jpg" class="img-fluid potrait" data-name="Rivan Prasetia S.Kom" data-position="Kepala Program Keahlian" alt="">
                    <h1>Rivan Prasetia S.Kom</h1>
                    <p>Kepala Program Keahlian</p>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/adam.jpg" class="img-fluid potrait" data-name="Atik Sugiyati S.Kom" data-position="Kepala Program Keahlian" alt="">
                    <h1>Atik Sugiyati S.Kom</h1>
                    <p>Kepala Program Keahlian</p>
                </div>
            </div>
        </div>
    </div>
@endsection
