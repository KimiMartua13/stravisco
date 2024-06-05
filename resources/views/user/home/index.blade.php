@extends('user/main')

@section('main')
    <section class="hero">
        <img src="/img/siang1.JPG" alt="Moment" class="img-fluid landscape">
    </section>

    <div class="stravisco-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="stravisco-title">
                        <h2>We Are <b>STRAVISCO</b></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-80 single-content-item stravisco-item" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-6">
                    <div class="stravisco-content-1">
                        <img id="randomImage1" class="img-fluid landscape" alt="Stravisco Moment">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="stravisco-text text-custom-1">
                        <h2>Liberation</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-80 single-content-item stravisco-item" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-6">
                    <div class="stravisco-text text-custom-2">
                        <h2>Strong Determination</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="stravisco-content-2">
                        <img id="randomImage2" class="img-fluid landscape" alt="Stravisco Moment">
                    </div>
                </div>
            </div>
            <div class="row mt-80 single-content-item stravisco-item" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-6">
                    <div class="stravisco-content-3">
                        <img id="randomImage3" class="img-fluid landscape" alt="Stravisco Moment">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="stravisco-text text-custom-3">
                        <h2>Strengthening Ideas</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-80 single-content-item stravisco-item" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-6">
                    <div class="stravisco-text text-custom-4">
                        <h2>Creativity</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="stravisco-content-2">
                        <img id="randomImage4" class="img-fluid landscape" alt="Stravisco Moment">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="stravisco-weare section-padding-0-100">
        <div class="stravisco-backend">
            <h2 class="noselect">Stravisco</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="we-are">
                        <h2>"We can make a differance"</h2>
                        <h4>Lorem ipsum dolor sit.</h4>
                        <a href="" class="btn btn-primary mt-80">asda</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Quotes for you Start -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="waves-up"><path fill="#212529" fill-opacity="1" d="M0,160L180,192L360,160L540,160L720,224L900,160L1080,128L1260,160L1440,192L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z"></path></svg>
    <div class="stravisco-quotes-foryou bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="quotes-title">
                        <h2>Quotes for you</h2>
                    </div>
                </div>
            </div>
            <div class="row quotes-for-you justify-content-center">
                <div class="col-lg-4">
                    <p class="mt-5">{{ $quote->quotes }}</p>
                    <p>- {{ $quote->student_name }} -</p>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="waves-down"><path fill="#212529" fill-opacity="1" d="M0,192L180,288L360,256L540,320L720,160L900,320L1080,160L1260,288L1440,128L1440,0L1260,0L1080,0L900,0L720,0L540,0L360,0L180,0L0,0Z"></path></svg>
    <!-- Quotes for you End -->
@endsection
