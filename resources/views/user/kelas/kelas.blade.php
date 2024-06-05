@extends('user/main')

@section('main')
    <div class="jurusan-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($fotoKumpulanKelas as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                        <img src="{{ Storage::url($item->photo) }}" class="d-block w-100 img-fluid landscape" height="500px" alt="Thumbnail kelas">
                    </div>
                @endforeach
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

            {{-- <div class="row stravisco-kelas-item justify-content-center">
                @foreach ($kumpulanKelas as $item)
                <div class="col-lg-6" style="margin-bottom: 20px;">
                    <img src="{{ Storage::url($item->ambilSatuFotoKelas()->photo) }}" class="img-fluid gambar" height="500px" alt="Foto Jurusan {{ $item->name }}">
                    <a href="/jurusan/{{ $item->getSingkatanNamaJurusan() }}/{{ $item->enkripsiId() }}">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach
            </div> --}}

            <div class="row stravisco-kelas-item justify-content-center">
                @foreach ($kumpulanKelas as $item)
                <div class="col-lg-6" style="margin-bottom: 20px;" data-aos="fade-up" data-aos-duration="1000">
                    <a href="/jurusan/{{ $item->getSingkatanNamaJurusan() }}/{{ $item->enkripsiId() }}/individu">
                        <img src="{{ Storage::url($item->ambilSatuFotoKelas()->photo) }}" class="img-fluid" height="500px" alt="Foto Jurusan {{ $item->name }}">
                        <h1>{{ $item->name }}</h1>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
