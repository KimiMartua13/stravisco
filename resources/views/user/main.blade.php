<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stravisco18</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />

</head>

<body>
    @include('user/partials/navbar')
    <section id="stravisco-moment">
            @yield('stravisco-moment')
    </section>
    <section id="stravisco-definition">
        <div class="card-stravisco card-definition">
            @yield('stravisco-definition')
        </div>
    </section>
    <section id="stravisco-jurusan">
        <div class="container">
            @yield('stravisco-jurusan')
        </div>
    </section>

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>