<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background:#d5d7d6;">
        <div class="flex-center position-ref full-height ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a style="color:black;"  href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color:black;" href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a style="color:black;" href="{{ route('register') }}">Registrarte</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="row">
                    <div class="" style="font-size: 500%;color:black;font-family:'Times New Roman', Times, serif;margin-top:-6%;">
                        
                        Control  de Inventario
                    </div>
                    <div class="" >

                        <img style="height: 60%;width:40%;" src="https://1000marcas.net/wp-content/uploads/2020/02/Fagor-Logo-1.png"  class="d-inline-block align-top"  alt="">
                    </div>
                    </div>


                <div class="links">
                <a href="">Derechos: Diego Lema</a>
                
                    
                <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
