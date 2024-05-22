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
        <h2>Adam Aulia Rachman</h2>
        <p>Lorem ipsum dolor sit amet.</p>
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
