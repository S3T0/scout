<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->

    <!-- styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    <style>
        section {
            display: flex;
            width: 100%;
            height: 430px;
        }

        section img {
            width: 0px;
            flex-grow: 1;
            object-fit: cover;
            opacity: .9;
            transition: .5 ease;
        }

        section img:hover {
            cursor: crosshair;
            width: 300px;
            opacity: 1;
            filter: contrast(120%);
        }

    </style>    
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="http://localhost/scout/public/storage/images/guiasyscout.png" alt="" style="width: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="#">CONÓCENOS</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    UNIDADES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">GOLONDRINAS</a></li>
                    <li><a class="dropdown-item" href="#">LOBATOS</a></li>
                    <li><a class="dropdown-item" href="#">GUIAS</a></li>
                    <li><a class="dropdown-item" href="#">SCOUTS</a></li>
                    <li><a class="dropdown-item" href="#">PIONEROS</a></li>
                    <li><a class="dropdown-item" href="#">CAMINANTES</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @auth
                        {{ Auth::user()->username }}
                    @endauth
                    Benjamin Torres
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')

        <section>
            <img src="http://localhost/scout/public/storage/images/golondrina.png" alt="">
            <img src="http://localhost/scout/public/storage/images/lobato.png" alt="">
            <img src="http://localhost/scout/public/storage/images/guia.png" alt="">
            <img src="http://localhost/scout/public/storage/images/tropa.png" alt="">
            <img src="http://localhost/scout/public/storage/images/pionero.png" alt="">
            <img src="http://localhost/scout/public/storage/images/caminante.png" alt="">
        </section>

    </main>
    <!-- footer -->

    <!-- scripts -->
    @vite(['resources/js/app.js'])
    @stack('js')
</body>
</html>
