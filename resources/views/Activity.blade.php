<x-app-layout>

    <link rel="stylesheet" href="/css/estilos_act.css">

      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>



    <!-- JavaScript Typed -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/typed.js@2.0.12') }}" defer></script>


    <!-- JavaScript Local -->
    <script src="{{ asset('js/Dom-Act.js') }}" defer></script>

    <div class="ConsIncEsp">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="TextEst"><span class="typed"></span></h1>

                </div>
                <div class="col">
                    <img id="ImgAct" src="/img/undraw_chore_list_re_2lq8.svg" alt="Imagen de agenda">
                </div>
            </div>
        </div>


        <svg preserveAspectRatio="none" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2EFFAB" fill-opacity="1"
                d="M0,192L80,165.3C160,139,320,85,480,101.3C640,117,800,203,960,224C1120,245,1280,203,1360,181.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

    </div>


    <div class="container">
        <div class="row">
            <div class="efect col col-lg-1 AdapCont">
 

            </div>
            <div class="efect1 col">


            </div>
        </div>
    </div>



</x-app-layout>