@extends('backup-landing/jurusan/index')

@section('main')
    <div class="jurusan-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tkj.jpg" class="d-block w-100" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tsm.jpg" class="d-block w-100" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-ak.jpg" class="d-block w-100" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-rpl.jpg" class="d-block w-100" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tet.jpg" class="d-block w-100" alt="Gedung jurusan">
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
    <div id="stravisco-kelas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="kelas-title mt-80">
                        <h1 class="text-center">Jurusan {{ $jurusan }}</h1>
                    </div>
                </div>
            </div>
            <div class="row stravisco-kelas-item justify-content-center">
                <div class="col-lg-6">
                    <a href="/jurusan/01.01.01">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Rekayasa Perangkat <br> Lunak 1</h1>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="/jurusan/01-01-02">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Rekayasa Perangkat <br> Lunak 2</h1>
                    </a>
                </div>
            </div>
            <div class="row stravisco-kelas-item">
                <div class="col-lg-6">
                    <a href="/jurusan/01-01-03">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Rekayasa Perangkat <br> Lunak 3</h1>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="/jurusan/01-01-04">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Rekayasa Perangkat <br> Lunak 4</h1>
                    </a>
                </div>
            </div>

            <div class="row stravisco-kelas-item justify-content-center">
                @foreach ($kumpulanKelas as $item)
                <div class="col-lg-6" style="margin-bottom: 20px;">
                    <a href="/jurusan/{{ $item->getSingkatanNamaJurusan() }}/{{ $item->enkripsiId() }}">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
