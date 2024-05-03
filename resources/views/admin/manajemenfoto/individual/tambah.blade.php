@extends('admin.index')

@section('main')
    <div class="row">
        <div class="col">
            <form action="/dashboard/photo/individual/aksiTambahSiswa" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$kelas->id}}">
            <div class="card info-card">
                <div class="card-body" style="margin-top: 15px;">
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Nama Siswa</label>
                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Quotes Siswa</label>
                        <textarea class="form-control" rows="3" name="quotes"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Foto Siswa</label>
                        <input class="form-control" type="file" id="formFile" name="foto_siswa">
                    </div>
                    <div class="mb-3">
                        <button class="btn" style="background-color: #012970; color:white;">Upload</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection