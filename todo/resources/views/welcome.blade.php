<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <div class="container p-5">
        <div class="row">

            @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <div class="col">
                        <a  href="{{ route('login') }}">Login</a>
                </div>
                        @if (Route::has('register'))
                            <div class="col">
                            <a href="{{ route('register') }}">Register</a>
                            </div>
                        @endif
                    @endauth

            @endif
        </div>

    </div>
    </body>

</html>
