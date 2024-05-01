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

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
