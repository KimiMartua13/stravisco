@extends('user/main')

@section('main')
    {{-- <div class="kelas-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($kelas->ambilFotoKelas() as $item => $value)
<<<<<<< HEAD
                @if ( $item == 1 )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
=======
                @if ($item == 1)
                    <div class="carousel-item active">
>>>>>>> f978f38ac320268ed9b90e6e1f4f7e8ab2c1ce22
                        <img src="{{ Storage::url($value->photo) }}" class="d-block w-100" alt="Gedung kelas">
                    </div>
                @else
                
                <div class="carousel-item">
                    <img src="{{ Storage::url($value->photo) }}" class="d-block w-100" alt="Gedung kelas">
                </div>

                @endif
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
    </div> --}}
    <div class="jurusan-building">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/DSC01090.jpg" class="d-block w-100" alt="Thumbnail kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/DSC01125.jpg" class="d-block w-100" alt="Thumbnail kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/DSC01137.jpg" class="d-block w-100" alt="Thumbnail kelas">
                </div>
                <div class="carousel-item">
                    <img src="/img/DSC01142.jpg" class="d-block w-100" alt="Thumbnail kelas">
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
                        <h1 class="text-center">Kelas {{ $kelas->name }}</h1>
                    </div>
                </div>
            </div>

            <div class="row stravisco-singlekelas-item justify-content-center">
                <div class="change-parent-btn d-flex justify-content-center gap-4">
                    <a href="/jurusan/{{ $jurusan }}/{{ $hash }}/individu">
                        <button class="change-btn {{ $filter == 'individu' ? 'active' : '' }}">Individu</button>
                    </a>
                    <a href="/jurusan/{{ $jurusan }}/{{ $hash }}/bts">
                        <button class="change-btn {{ $filter == 'bts' ? 'active' : '' }}">BTS</button>
                    </a>
                    <a href="/jurusan/{{ $jurusan }}/{{ $hash }}/kelompok">
                        <button class="change-btn {{ $filter == 'kelompok' ? 'active' : '' }}">Kelompok</button>
                    </a>
                    <a href="/jurusan/{{ $jurusan }}/{{ $hash }}/putbu">
                        <button class="change-btn {{ $filter == 'putbu' ? 'active' : '' }}">Putih Abu</button>
                    </a>
                </div>

                @foreach ($data as $item)
<<<<<<< HEAD
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ Storage::url( $item->photo )}}" class="img-fluid potrait" loading="lazy" alt="foto {{ $item->student_name }}">
                    @if ( $filter == 'individu' )
                        <h1>{{ $item->student_name }}</h1>
                        <p>"{{ $item->quotes }}"</p>
                    @endif
                </div>
=======
                    <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ Storage::url($item->photo) }}"
                            class="img-fluid {{ $filter == 'individu' ? 'modalIndividu' : 'modalLain' }}"
                            data-name="{{ $item->student_name }}" data-quotes="{{ $item->quotes }}"
                            alt="foto {{ $item->student_name }}">
                        <h1 class="student-name">{{ $item->student_name }}</h1>
                        <p class="quotes-student" data-fullquote="{{ $item->quotes }}">"{{ $item->quotes }}"</p>
                    </div>
>>>>>>> f978f38ac320268ed9b90e6e1f4f7e8ab2c1ce22
                @endforeach
            </div>
        </div>
    </div>
@endsection
