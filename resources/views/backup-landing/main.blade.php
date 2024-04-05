<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stravisco18</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landing-page.css">
    <script src="/js/jquery/jquery.min.js"></script>

</head>

<body>
    @include('backup-landing/partials/navbar')

    @yield('main')

    <footer class="stravisco-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="copyright">
                        <p>Copyright &copy; <span id="presentYear"></span> All rights reserved | by RPL AKT 18</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
