@extends('admin.index')

@section('main')
<div class="col-xxl-4 col-md-6">
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">Jumlah Kelas</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <div class="ps-3">
                <h6>26</h6>
              </div>
            </div>
        </div>  
    </div>
    <div class="card info-card">
        <div class="card-body">
            <h5 class="card-title">Jumlah Foto</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-file-image"></i>
              </div>
              <div class="ps-3">
                <h6>210</h6>
              </div>
            </div>
        </div>  
    </div>
</div>
@endsection