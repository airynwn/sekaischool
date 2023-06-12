
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS -->
    @yield('css')

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/56ace10afe.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    <!--  -->
<main>
    @yield('content')
</main>
@if (Route::current()->getName() == 'index')
<!-- Footer -->
<div class="container-fluid bottom-0" style="background-color: #3AA89B;">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
        <p class="col-md-4 mb-0 text-white">&copy; 2023 airynwn</p>
        <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <h3>SekaiSchool</h3>
        </a>
        <div class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <a href="https://github.com/airynwn" target="_blank">
                    <i class="fa fa-brands fa-github fa-stack-1x fa-inverse"></i>
                </a>
            </span>
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <a href="https://twitter.com/airynwn" target="_blank">
                    <i class="fa fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                </a>
            </span>
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <a href="https://www.youtube.com/@airynwn" target="_blank">
                    <i class="fa fa-brands fa-youtube fa-stack-1x fa-inverse"></i>
                </a>
            </span>
        </div>
    </footer>
</div>
@endif
<!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
