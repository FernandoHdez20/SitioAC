<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//code.tidio.co/jy4xt97e32ubz1nmeqqt4jyrjt1kvend.js" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" href="{{ asset('img/icono.ico') }}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a href="{{ 'welcome' }}"><img src="{{ asset('img/logo.png') }}" width="50px" height="50px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'welcome' }}"><b>Inicio</b></a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.quienessomos' }}"><b>Quienes somos</b></a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.recursospadres' }}"><b>Recursos educativos</b></a>
                    </li>

                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.directorio' }}"><b>Directorio</b></a>
                    </li>

                    {{-- <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.eventos' }}"><b>Eventos</b></a>
                    </li> --}}

                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.aparatosfuncionales' }}"><b>Productos</b></a>
                    </li>

                    <li class="nav-item">
                        <a style="color: white" class="nav-link active" aria-current="page" href="{{ 'modulos.donador' }}"><b>Donador</b></a>
                    </li>

                </ul>
                <form class="d-flex">
                    <a class="btn btn-success" href="{{ 'cuenta.iniciarsesion' }}"><b>Inciar Sesión</b></a>
                </form>
            </div>
        </div>
    </nav>
    <div class="col-sm-12">
        @yield('contenido')
    </div>
    
    <script src="//code.tidio.co/jy4xt97e32ubz1nmeqqt4jyrjt1kvend.js" async></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
<footer class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Organización</h3>
                <hr>
                <ul class="list-unstyled text-secondary">
                    <li><a class="text-decoration-none link-secondary" href="">Nosotros</a></li>
                    <li><a class="text-decoration-none link-secondary" href="">Discapacidad</a></li>
                    <li><a class="text-decoration-none link-secondary" href="">Recursos educativos</a></li>
                    <li><a class="text-decoration-none link-secondary" href="">Cursos</a></li>
                    <li><a class="text-decoration-none link-secondary" href="">Directorio</a></li>
                </ul>

            </div>
            <div class="col-md-3">
                <h3>Participación</h3>
                <hr>
                <ul class="list-unstyled text-secondary">
                    <li><a class="text-decoration-none link-secondary" href="">Escuela</a></li>
                    <li><a class="text-decoration-none link-secondary" href="">Otros</a></li>
                </ul>

            </div>
            <div class="col-md-3">
                <h3>Encuentranos</h3>
                <hr>
                <ul class="list-unstyled text-secondary">
                    <li><i class="fa-brands fa-twitter"></i> <a class="text-decoration-none link-secondary" href="">Twitter</a></li>
                    <li><i class="fa-brands fa-square-facebook"></i> <a class="text-decoration-none link-secondary" href="">Facebook</a></li>
                    <li><i class="fa-brands fa-instagram"></i> <a class="text-decoration-none link-secondary" href="">Instagram</a></li>
                </ul>

            </div>
            <div class="col-md-3">
                <h3>Encuentros</h3>
                <hr>
                <ul class="list-unstyled text-secondary">

                    <li>Dirección de encuentros</li>
                </ul>

            </div>
        </div>
    </div>
</footer>
</html>
