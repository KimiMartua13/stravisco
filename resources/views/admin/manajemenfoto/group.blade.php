@extends('admin.index')

@section('main')
<div class="col">
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">
                Pilih Jurusan
            </h5>
            <div class="row">
                <div class="col">
                    <a href="/dashboard/photo/group/ak"><button class="btn" style="background-color: #012970; color:white;">AK</button></a>
                    <a href="/dashboard/photo/group/rpl"><button class="btn" style="background-color: #012970; color:white;">RPL</button></a>
                    <a href="/dashboard/photo/group/tsm"><button class="btn" style="background-color: #012970; color:white;">TSM</button></a>
                    <a href="/dashboard/photo/group/tkj"><button class="btn" style="background-color: #012970; color:white;">TKJ</button></a>
                    <a href="/dashboard/photo/group/tet"><button class="btn" style="background-color: #012970; color:white;">TET</button></a>
                    <a href="/dashboard/photo/group/tei"><button class="btn" style="background-color: #012970; color:white;">TEI</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">Jurusan {{ strtoupper($jurusan) }}  Filter By : {{ $title }}</h5>
            <a href="/dashboard/photo/tambah/group/{{ $jurusan }}"><button class="btn mb-3" style="background-color: #012970; color:white;">Tambah Foto Group</button></a>
            <div class="d-flex align-items-center">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="/dashboard/photo/group/{{$jurusan}}/all">All</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/{{$jurusan}}/sekelas">Sekelas</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/{{$jurusan}}/putbu">Putbu</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/{{$jurusan}}/kelompok">Kelompok</a></li>
                    </ul>
                </div>
            </div>
            @foreach ($fotoGroup as $item => $value)
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item }}</h5>
                    <div class="row">
                    @foreach ($value as $data)
                        <div class="col text-center">
                            <img src="{{ Storage::url($data->photo) }}" width="250px"  alt="foto" class="mb-3">
                            <div class="d-flex gap-3 justify-content-center mb-3">
                                <form action="/dashboard/photo/hapus/group" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <button class="btn" style="background-color: #012970; color:white;">Hapus</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection