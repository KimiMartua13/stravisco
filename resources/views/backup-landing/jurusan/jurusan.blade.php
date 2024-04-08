@extends('backup-landing/jurusan/index')

@section('main')
    <div class="jurusan-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tkj.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tsm.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-ak.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-rpl.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tet.jpg" class="d-block w-100 img-fluid" alt="Gedung jurusan">
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
    <div id="stravisco-jurusan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jurusan-title mt-80">
                        <h1 class="text-center">Jurusan</h1>
                    </div>
                </div>
            </div>
            <div class="row text-center stravisco-jurusan-item">
                <div class="col-lg-4">
                    <a href="/jurusan/rpl">
                        <img src="/img/rpl-logo.png" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Rekayasa Perangkat <br> Lunak</h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/jurusan/tkj">
                        <img src="/img/tkj-logo.png" class="img-fluid" alt="Teknik Komputer dan Jaringan">
                        <h1>Teknik Komputer <br> dan Jaringan</h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/jurusan/tei">
                        <img src="/img/tei-logo.png" class="img-fluid" alt="Teknik Elektronika Industri">
                        <h1>Teknik Elektronika <br> Industri</h1>
                    </a>
                </div>
            </div>
            <div class="row text-center stravisco-jurusan-item">
                <div class="col-lg-4">
                    <a href="/jurusan/tbsm">
                        <img src="/img/tsm-logo.png" class="img-fluid" alt="Teknik dan Bisnis Sepeda Motor">
                        <h1>Teknik dan Bisnis <br> Sepeda Motor</h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/jurusan/ak"><img src="/img/ak-logo.png" class="img-fluid" alt="Akuntansi dan Keuangan Lembaga">
                        <h1>Akuntansi dan <br> Keuangan Lembaga</h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/jurusan/tet">
                        <img src="/img/tet-logo.png" class="img-fluid" alt="Teknik Energi Terbarukan">
                        <h1>Teknik Energi <br> Terbarukan</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jurusan-title mt-80">
                        <h1 class="text-center">Jurusan</h1>
                    </div>
                </div>
            </div>
            <div class="row text-center stravisco-jurusan-item ">
                @foreach ($jurusan as $item)
                <div class="col-lg-4 mb-4">
                    <a href="/jurusan/{{ $item->getSingkatanNamaJurusan() }}">
                        <img src="/img/{{$item->getSingkatanNamaJurusan()}}-logo.png" class="img-fluid mb-2" alt="{{ $item->name }}">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
