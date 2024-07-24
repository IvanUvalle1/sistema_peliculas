<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{asset('img/camara.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Prueba de Peliculas</title>
    <style>
        body {
            background-color: grey;
        }

        @font-face {
            font-family: 'Darlothes Grunge';
            src: url('font/Darlothes Grunge.otf');
        }

        .titulo1 {
            font-family: 'Darlothes Grunge';
            color: white;
            font-size: 75px;
            text-shadow: 0.1em 0.1em 0.2em black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div style="width: 60px">
                <img src="{{asset('img/camara.png')}}" alt="" width="40px">
            </div>
            <a class="navbar-brand" href="#">Prueba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Estrenos más recientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Acción</a></li>
                            <li><a class="dropdown-item" href="#">Aventura</a></li>
                            <li><a class="dropdown-item" href="#">Ciencia Ficción</a></li>
                            <li><a class="dropdown-item" href="#">Infantiles</a></li>
                            <li><a class="dropdown-item" href="#">Comedia</a></li>
                            <li><a class="dropdown-item" href="#">Familiar</a></li>
                            <li><a class="dropdown-item" href="#">Documentales</a></li>
                            <li><a class="dropdown-item" href="#">Romaticismo</a></li>
                            <li><a class="dropdown-item" href="#">Terror</a></li>
                            <li><a class="dropdown-item" href="#">Suspenso</a></li>
                            <li><a class="dropdown-item" href="#">Otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</button>
                </div>
                &nbsp;
                <div class="d-flex">
                    <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#loginModalRegistro">Registrarse</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <center>
            <h1 class="titulo1 animate__animated animate__pulse">Peliculas Ivan Uvalle</h1>
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uDzfa0w86Vw?si=GE6z84Bnvpa4mBo3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </center>
    </div>
    <!-- Modal de inicio de sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal de registro -->
    <div class="modal fade" id="loginModalRegistro" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Crear Cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="nombre" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="apellido" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-success">Registrarse</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>