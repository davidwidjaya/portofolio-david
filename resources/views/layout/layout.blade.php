<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>David Alexander W - Portofolio</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Jquery 3.6.0 --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <link rel='preload' href='https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap' as='style' onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap'></noscript>
        <link rel='preload' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' as='style' onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'></noscript> --}}

</head>

<body>
    {{-- <h1 class="font-medium">Ini makanan datang.</h1> --}}
    @include('layout.header')
    @yield('section')
    @include('layout.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $("#services").click(function() {
            $('html, body').animate({
                scrollTop: $("#section-services").offset().top
            }, 500);
        });
        $("#btn-see-more").click(function() {
            $('html, body').animate({
                scrollTop: $("#btn-see-more").offset().top
            }, 500);
        });
    </script>
    @stack('script')
</body>

</html>
