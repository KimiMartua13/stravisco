@extends('user/kelas/index')

@section('main')
    <div class="kelas-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/gedung-tei.jpg" class="d-block w-100" alt="Gedung kelas">
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
                        {{-- <h1 class="text-center">Kelas {{ $kelas->name }}</h1> --}}
                        <h1 class="text-center">Rekayasa Perangkat Lunak 1</h1>
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
                {{-- @foreach ($data as $item)
                <div class="col-lg-3">
                    <img src="{{ Storage::url( $item->photo )}}" class="img-fluid gambar" alt="foto {{ $item->student_name }}">
                    <h1>{{ $item->student_name }}</h1>
                    <p>"{{ $item->quotes }}"</p>
                </div>
                @endforeach --}}

                <div class="change-parent-btn d-flex justify-content-center gap-4">
                    <a href="#">
                        <button class="change-btn active">test 1</button>
                    </a>
                    <a href="#">
                        <button class="change-btn">test 2</button>
                    </a>
                    <a href="#">
                        <button class="change-btn">test 3</button>
                    </a>
                    <a href="#">
                        <button class="change-btn">test 4</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="gambarModal">
        <span class="tutup">&times;</span>
        <img class="modal-content" id="imgModal">
    </div>
@endsection
