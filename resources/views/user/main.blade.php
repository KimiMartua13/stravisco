<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stravisco | Home</title>
    @include('user/assets/header')

</head>

<body>
    @include('user/partials/navbar')

    @yield('main')

    @include('user/assets/footer')

    <div id="gambarModalPotrait">
        <span class="tutup">&times;</span>
        <img class="modal-content-potrait" id="imgModalPotrait">
        <div class="information-card">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Adam Aulia Rachman</h2> <br>
                </div>
                <div class="col-lg-12">
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil suscipit ipsa nobis totam dignissimos reiciendis aut officiis deserunt cupiditate non, ea ut nam culpa repellat minima adipisci itaque. Maxime?</p>
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
