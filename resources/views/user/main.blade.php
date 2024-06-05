<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/stravisco.png" type="image/x-icon">
    <title>Stravisco | Home</title>
    @include('user/assets/header')

</head>

<body>
    @include('user/partials/navbar')

    @yield('main')

    <a href="#" class="btn back-to-top"><i class="bi bi-arrow-up-short"></i></a>

    @include('user/assets/footer')

    <div id="gambarModalPotrait">
        <span class="tutup">&times;</span>
        <img class="modal-content-potrait" id="imgModalPotrait">
        <div id="information-card">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 id="modalStudentName"></h2>
                    <br>
                </div>
                <div class="col-lg-12">
                    <p id="modalStudentQuotes"></p>
                    <p class="read-more mt-2"><a href="#" class="read-more-link">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
    

    <div id="gambarModalLandscape">
        <span class="tutup">&times;</span>
        <img class="modal-content-landscape" id="imgModalLandscape">
    </div>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
