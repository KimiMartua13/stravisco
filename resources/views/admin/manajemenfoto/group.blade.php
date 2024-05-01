@extends('admin.index')

@section('main')
<div class="">
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">Photo {{ $cardTitle }} : {{ $jumlahFoto }}</h5>
            <div class="d-flex align-items-center">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="/dashboard/photo/group/all/">All</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/group/">Group</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/putbu/">Putbu</a></li>
                      <li><a class="dropdown-item" href="/dashboard/photo/group/kelompok/">Kelompok</a></li>
                    </ul>
                </div>

                <div class="row">
                @foreach ($fotoGroup as $item)
                <div class="col m-3">
                    <img width="250px" src="{{ Storage::url( $item->photo ) }}" loading="lazy" class="mb-3" alt="Deskripsi Gambar">
                    <div class="text-center"> 
                        <a href="/dashboard/photo/group/{{ $item->id }}"><button class="btn" style="background-color: #012970; color:white;">Hapus</button></a>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>  
    </div>
</div>
@endsection