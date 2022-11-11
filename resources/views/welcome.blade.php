<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cow-bem</title>
    <link rel="shortcut icon" href="/img/Cow.png" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Styles -->

    <link rel="stylesheet" href="/css/estilos.css">

</head>

<body id="ContenedorW">


    <nav id="Barra-est" class="navbar navbar-expand-lg">
        <div id="ActM" class="container-fluid">
            <span class="navbar-brand" href="#">Cow-bem</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Sobre Nosotros</a>
                    </li>

                </ul>

                <ul id="btnlog" class="justify-content-end navbar-nav">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="nav-link">Iniciar sesion</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a id="btnreg" href="{{ route('register') }}" class="btn">Registrarse</a>
                        @endif
                        @endauth
                    </li>
                    @endif

                </ul>


            </div>
        </div>
    </nav>

    <div id="Contenedor_img">
        <p id="Text1" class="TextDecor">Bienvenido a:</p>
        <img id="Img1" src="/img/L_max.png" alt="Logo de la empresa (Caw - bem )">
    </div>

    <section style="margin:10vw">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                   
                    <img id="ImagenAb" src="/img/3426526.jpg" alt="">
                   

                </div>
                <div id="ColText" class="col">
                    <h1 id ="RESD">Cow - bem</h1>
                    <p>
                        Somos una empresa, dispuesta a dar
                        todo por nuestros clientes, nuestro
                        objetivo es ayudarte a la gestión
                        correcta de tu ganado bobino, atravez de la
                        implementacion de tecnologias para la automatizacion de procesos.
                        <a href="">Saber mas.</a>
                    </p>

                </div>

            </div>
        </div>

    </section>

    <section style="margin:10vw">
        <div class="container text-center">
            <div class="row">
                <div class="col Information">
                    <h1>
                        Comprometidos con nuestros clientes
                    </h1>
                    <p>
                        Por que sabemos que tu haces tu mejor
                        esfuerzo por eso nosotros hacemos lo mismo,
                        ofreciéndote un servicio competente y de calidad.
                        Nos aseguramos de que la informacion
                        de tu ganado este en las mejores manos,
                        para que tu puedas concentrarte en lo que mas te gusta.
                    </p>
                </div>
                <div class="col ColImag">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <img src="/img/Img1.jpg" alt=""></div>
                            <div class="swiper-slide"> <img src="/img/Img2.jpg" alt=""></div>
                            <div class="swiper-slide"> <img src="/img/Img3.jpg" alt=""></div>
                            <div class="swiper-slide"> <img src="/img/Imag4.jpg" alt=""></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="Information1">
        
        <h1 class = "Inftitle"><span class="typed"></span></h1>
        <section id="SecBem">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="Cardt">
                            <h2>Gestion de registros</h2>
                            <img src="/img/carpeta-150.png" alt="Imagen de una carpeta">
                            <p>

                                Almacena y manipula
                                de manera segura la
                                información de tu
                                ganado.

                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="Cardt">
                            <h2>Agenda</h2>
                            <img src="/img/calendar-document---v2.png" alt="Imagen de una agenda">
                            <p>
                                Puedes
                                gestionar tus
                                actividades diarias, relacionadas a tu ato ganadero.

                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="Cardt">
                            <h2>Profesionales</h2>
                            <img src="/img/user.png" alt="Imagen de contacto">
                            <p>

                                Comunícate con
                                especialistas
                                veterinarios, para contratar sus servicios.
                            </p>

                        </div>

                    </div>
                </div>
            </div>

    

            <div class="container text-center" style = "margin-bottom: 6vw; margin-top: 5vw;">
                <div class="row">
                    <div class="col">
                        <h1 id = "TextLogc" class = "Title1">No pierdas mas tiempo comienza ahora, solo debes <a href="http://">Registrate</a> o <a href="http://">Iniciar Sesion</a></h1>

                    </div>
                    <div class="col">
                    <img id="ImgLogsc" class ="ImgLog" src="/img/Login.svg" alt="">
                    </div>
                </div>
            </div>

        
            <footer id="FooterWel">
                <svg preserveAspectRatio="none" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#081C35" fill-opacity="1"
                        d="M0,224L0,288L37.9,288L37.9,128L75.8,128L75.8,256L113.7,256L113.7,128L151.6,128L151.6,128L189.5,128L189.5,160L227.4,160L227.4,288L265.3,288L265.3,32L303.2,32L303.2,64L341.1,64L341.1,32L378.9,32L378.9,96L416.8,96L416.8,224L454.7,224L454.7,128L492.6,128L492.6,64L530.5,64L530.5,256L568.4,256L568.4,0L606.3,0L606.3,96L644.2,96L644.2,288L682.1,288L682.1,192L720,192L720,0L757.9,0L757.9,32L795.8,32L795.8,192L833.7,192L833.7,192L871.6,192L871.6,160L909.5,160L909.5,96L947.4,96L947.4,128L985.3,128L985.3,256L1023.2,256L1023.2,160L1061.1,160L1061.1,224L1098.9,224L1098.9,32L1136.8,32L1136.8,256L1174.7,256L1174.7,32L1212.6,32L1212.6,288L1250.5,288L1250.5,224L1288.4,224L1288.4,256L1326.3,256L1326.3,256L1364.2,256L1364.2,32L1402.1,32L1402.1,256L1440,256L1440,320L1402.1,320L1402.1,320L1364.2,320L1364.2,320L1326.3,320L1326.3,320L1288.4,320L1288.4,320L1250.5,320L1250.5,320L1212.6,320L1212.6,320L1174.7,320L1174.7,320L1136.8,320L1136.8,320L1098.9,320L1098.9,320L1061.1,320L1061.1,320L1023.2,320L1023.2,320L985.3,320L985.3,320L947.4,320L947.4,320L909.5,320L909.5,320L871.6,320L871.6,320L833.7,320L833.7,320L795.8,320L795.8,320L757.9,320L757.9,320L720,320L720,320L682.1,320L682.1,320L644.2,320L644.2,320L606.3,320L606.3,320L568.4,320L568.4,320L530.5,320L530.5,320L492.6,320L492.6,320L454.7,320L454.7,320L416.8,320L416.8,320L378.9,320L378.9,320L341.1,320L341.1,320L303.2,320L303.2,320L265.3,320L265.3,320L227.4,320L227.4,320L189.5,320L189.5,320L151.6,320L151.6,320L113.7,320L113.7,320L75.8,320L75.8,320L37.9,320L37.9,320L0,320L0,320Z">
                    </path>
                </svg>


                <div id="SuperCont">


                    <div class="CFonfd container text-center">
                        <div class="row">
                            <div style="padding-right: 4vw;" class="Bordespc col">
                                <p id="Texte1">Escribenos</p>
                                <form action="">

                                    <div style="  margin-bottom: 2vw;" class="row">
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="text" class="styleCa form-control"
                                                    id="formGroupExampleInput" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="email" class="styleCa form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="email">

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">

                                        <textarea class="styleCa form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Mensaje"></textarea>
                                    </div>
                                    <input type="submit" value="Enviar" class="BtnEnv">
                                </form>

                            </div>

                            <div class="Bordespc col">
                                <p class="TextS">Siguenos en:</p>
                                <a href=""><i class="Icons fa-brands fa-facebook"></i></a>
                                <a href=""><i class="Icons fa-brands fa-square-twitter"></i></a>
                                <a href=""><i class="Icons fa-brands fa-square-instagram"></i></a>
                                <a href=""><i class="Icons fa-brands fa-youtube"></i></a>
                                <a href=""><i class="Icons fa-brands fa-weixin"></i></a>


                                <p style=" margin-top: 1.5vw;" class="TextS">Contactanos: </p>
                                <a class="Texsec"><i class="fa-solid fa-fax"></i> 408-537-6000</a>
                                <a class="Texsec"><i class="fa-sharp fa-solid fa-phone-volume"> </i> +505 87457218</a>
                                <a class="Texsec"><i class="fa-solid fa-envelope"></i> Company-Caw-bem@gmail.com</a>
                                <a class="Texsec"><i class="fa-solid fa-location-dot"></i> Nicaragua, suina br Pedro
                                    Juaquin Chamorro</a>


                            </div>
                            <div class="col col-lg-2">
                                <p class="TextS">Saber mas:</p>
                                <a class="TextsHij">Sobre nosotros</a>
                                <a class="TextsHij">Terminos y Condiciones</a>
                                <a class="TextsHij">
                                    Politicas de privacidad
                                </a>
                                <a class="TextsHij">
                                    Politicas de cookies
                                </a>

                            </div>

                        </div>

                    </div>
                    <hr id="BarraFn">
                    <p class="StyleTexp">
                        Copyright © 2022. Cow - bem todos los derechos reservados.
                    </p>


                </div>

            </footer>


        </section>
    </section>





</body>

<script src="{{ asset('js/Dom-wel.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</html>