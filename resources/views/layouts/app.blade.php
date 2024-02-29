<!------------------------------
    Author : Sibin V M
    Title : App Layout View
    Created Date : 10-06-2022
-------------------------------->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Font Awsome Cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="antialiased position-relative">
        <section class="container-fluid mb-5">
            <div class="row justify-content-center box-shadow sticky-top" style="background-color: white">
                <div class="col-10">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">
                                <div>
                                    <img src="{{ asset('images/logo.png') }}" alt="" width="50px">
                                    <span class="text-warning">Blog Spot</span>
                                </div>      
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <form class="d-flex" role="search">
                                    <div class="input-group">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-warning" type="button"><i class="fa-solid fa-magnifying-glass text-light"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>   
                </div>
            </div>

            <main>
                @yield('content')
            </main>
        </section>

        <!-- JQuery Cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- JavaScript Bundle for Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <!-- Javascript -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>