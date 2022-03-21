<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - {{ __('404 title') }}</title>

        <!--BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!--CUSTOM CSS -->
        <link href="css/404.css" rel="stylesheet">
    </head>
    <body class="bg-dark text-white">
        <div class="text-center container min-vh-100">
            <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <img src="images/404-broken-pencil.svg" width="400" height="200">
                    <div>
                        <h1>4<span class="logo"></span>4</h1>
                    </div>
                    <div>
                        <h2>{{ __('404 page not found') }}</h2>
                        <p>{{ __('404 description') }}</p>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('404 go back to homepage') }}</a>
                </div>
            </div>
            
        </div>
    </body>
</html>