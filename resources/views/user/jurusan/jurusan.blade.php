@extends('user/main')

@section('main')
    <div class="jurusan-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tkj.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tsm.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-ak.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-rpl.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tet.jpg" class="d-block w-100 img-fluid landscape" alt="Gedung jurusan">
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
            <div class="row text-center stravisco-jurusan-item ">
                @foreach ($jurusan as $item)
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <a href="/jurusan/{{ $item->getSingkatanNamaJurusan() }}">
                            <img src="/img/{{ $item->getSingkatanNamaJurusan() }}-logo.png" class="img-fluid mb-2"
                                alt="{{ $item->name }}">
                            <h1>{{ $item->name }}</h1>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
