@extends('/user/main')

@section('stravisco-moment')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/moment1.jpg" class="d-block w-100" alt="Moment 1">
            </div>
            <div class="carousel-item">
                <img src="/img/moment2.jpg" class="d-block w-100" alt="Moment 2">
            </div>
            <div class="carousel-item">
                <img src="/img/moment3.jpg" class="d-block w-100" alt="Moment 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('stravisco-definition')
    <div class="card stravisco-wrapper">
        <div class="card-body text-definition text-white">
            <h5>Stravisco</h5>
            <p>Pembebasan, dalam konteks yang lebih luas, mencakup memberikan ruang dan kesempatan bagi anak muda untuk
                menguatkan ide, gagasan, dan kreativitas positif mereka tanpa harus kehilangan identitas atau jati diri
                mereka. Ini melibatkan pengembangan lingkungan yang mendukung di mana mereka merasa aman untuk
                mengekspresikan diri mereka tanpa takut akan penilaian atau pembatasan eksternal yang membatasi pertumbuhan
                mereka.</p>
        </div>
    </div>
@endsection

@section('stravisco-jurusan')
    <h1 class="text-center">Jurusan</h1>
    <div class="row text-center jurusan-1">
        <div class="col-md-4">
            <a href="/">
                <img src="/img/rpl_logo.png" alt="Rekayasa Perangkat Lunak">
                <h1>Rekayasa Perangkat <br> Lunak</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="/img/tkj_logo.png" alt="Teknik Komputer dan Jaringan">
                <h1>Teknik Komputer <br> dan Jaringan</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="/img/tei_logo.png" alt="Teknik Elektronika Industri">
                <h1>Teknik Elektronika <br> Industri</h1>
            </a>
        </div>
    </div>
    <div class="row jurusan-1 mt-5">
        <div class="col-md-4">
            <a href="">
                <img src="/img/tsm_logo.png" alt="Teknik dan Bisnis Sepeda Motor">
                <h1>Teknik dan Bisnis <br> Sepeda Motor</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href=""><img src="/img/ak_logo.png" alt="Akuntansi dan Keuangan Lembaga">
                <h1>Akuntansi dan <br> Keuangan Lembaga</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="/img/tet_logo.png" alt="Teknik Energi Terbarukan">
                <h1>Teknik Energi <br> Terbarukan</h1>
            </a>
        </div>
    </div>
@endsection
