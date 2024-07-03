<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winter Fashion</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div id="app">
        <section class="head-section">
            <header class="container">
                <nav class="navbar navbar-expand-lg navbar-light penguin-nabbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="Images/logo.png" alt="" class="penguin-logo img-fluid" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </section>

        <main class="py-4">
            @yield('content')
        </main>
        </div>

 </body>
</html>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>