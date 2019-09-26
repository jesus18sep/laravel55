<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="#">
                
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                            <a class="navbar-brand" href="#">Top navbar</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="{{('/')}}">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                <a class="nav-link" href="{{('producto')}}">Producto <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                              </ul>
                              <form class="form-inline mt-2 mt-md-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                            </div>
                          </nav>

                <div class="">
                    <a href="{{('/')}}">Inicio</a>
                    <a href="{{('/producto')}}">Producto</a>
                </div>
            </div>
        </div>
    </body>
</html>
