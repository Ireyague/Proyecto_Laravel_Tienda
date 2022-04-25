<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
</head>
<body>
<header>

     <img class="h-14" src="{{asset("images/logo.png")}}" alt="logo" >
    <h1 class="text-5xl">TIENDA DE VIDEOJUEGOS</h1>
        <div class="logueo">
            @auth
                {{auth()->user()->name}}
                <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <x-button>Logout</x-button>

                </form>
            @endauth
            @guest
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <x-input name="email" placeholder="email"></x-input>
                    <x-input name="password" placeholder="password"></x-input>
                    <br/>
                    <x-button>Login</x-button>
                    <x-button>Registrar</x-button>
                                    </form>
               {{-- <x-ancla ref="{{route('login')}}">Login</x-ancla>
                <x-ancla ref="{{route('register')}}">Registrar</x-ancla>--}}

    @endguest
        </div>
</header>

<nav>

    <ul>

        <li class="font-bold"><a href="productos">PRODUCTOS</a></li>




    </ul>
    @yield("menu")
</nav>
<main>
    @yield("contenido")
    <h1>Main</h1>
</main>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Conectar a redes sociales</span>
            </div>
            <!-- Left -->

         {{--   <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->--}}
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Tienda de videojuegos
                        </h6>

                    </div>

                </div>
            </div>
        </section>
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Github proyecto Laravel Irene</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</body>
</html>
