@extends('user/kelas/index')

@section('main')
    <div class="kelas-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100" alt="Gedung kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tkj.jpg" class="d-block w-100" alt="Gedung kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tsm.jpg" class="d-block w-100" alt="Gedung kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-ak.jpg" class="d-block w-100" alt="Gedung kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-rpl.jpg" class="d-block w-100" alt="Gedung kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/gedung-tet.jpg" class="d-block w-100" alt="Gedung kelas">
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
    <div id="stravisco-singlekelas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="kelas-title mt-80">
                        <h1 class="text-center">Kelas</h1>
                    </div>
                </div>
            </div>

            <div class="row stravisco-singlekelas-item justify-content-center">
                {{-- @foreach ($kumpulanKelas as $item)
                <div class="col-lg-6" style="margin-bottom: 20px;">
                    <a href="/kelas/{{ $item->getSingkatanNamaJurusan() }}/{{ $item->enkripsiId() }}">
                        <img src="/img/DSC01090.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach --}}
                <div class="col-lg-3">
                    <a href="/kelas/">
                        <img src="/img/adam.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Adam Aulia Rachman</h1>
                        <p>"Lorem ipsum dolor sit, amet consectetur adipisicing."</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="/kelas/">
                        <img src="/img/adam.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Adam Aulia Rachman</h1>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="/kelas/">
                        <img src="/img/adam.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Adam Aulia Rachman</h1>
                        <p>"Lorem ipsum dolor sit amet consectetur."</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="/kelas/">
                        <img src="/img/adam.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Adam Aulia Rachman</h1>
                        <p>"Lorem ipsum dolor sit amet."</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="/kelas/">
                        <img src="/img/adam.jpg" class="img-fluid" alt="Rekayasa Perangkat Lunak">
                        <h1>Adam Aulia Rachman</h1>
                        <p>"Lorem ipsum dolor sit amet."</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
