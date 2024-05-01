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
                    <a href="/dashboard/photo/individual/ak"><button class="btn" style="background-color: #012970; color:white;">AK</button></a>
                    <a href="/dashboard/photo/individual/rpl"><button class="btn" style="background-color: #012970; color:white;">RPL</button></a>
                    <a href="/dashboard/photo/individual/tsm"><button class="btn" style="background-color: #012970; color:white;">TSM</button></a>
                    <a href="/dashboard/photo/individual/tkj"><button class="btn" style="background-color: #012970; color:white;">TKJ</button></a>
                    <a href="/dashboard/photo/individual/tet"><button class="btn" style="background-color: #012970; color:white;">TET</button></a>
                    <a href="/dashboard/photo/individual/tei"><button class="btn" style="background-color: #012970; color:white;">TEI</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">Jurusan {{ strtoupper($jurusan) }}</h5>
            @foreach ($kelas as $item => $value)
                <div class="card info-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title">{{ $item }}</h5>
                            </div>
                            <div class="col text-end"> 
                                <a href="/dashboard/photo/individual/{{$jurusan}}/{{ strtolower( $item ) }}/tambah"><button class="btn" style="background-color: #012970; color:white;">Tambah Siswa</button></a>
                            </div>

                        </div>
                        <div class="row">
                        @foreach ($value as $data)
                            <div class="col text-center">
                                <img width="250px" src="{{ Storage::url( $data->photo ) }}" loading="lazy" class="mb-3" alt="Deskripsi Gambar">
                                <p>{{ $data->student_name }}</p>
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