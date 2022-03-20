<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!--BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <div class="container min-vh-100">
            <div class="row d-flex justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{ route('login.auth') }}">
                                @csrf
                                <div class="mb-4">
                                    <img src="images/logo.svg" width="120" height="120">
                                    <h3>{{ config('app.name') }}</h3>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-lg rounded-pill" id="username" placeholder="Felhasználónév">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg rounded-pill" id="password" placeholder="Jelszó">
                                </div>
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Belépés</button>
                                </div>
                                <a href="#" class="text-decoration-none">Elfelejtettem a jelszavam</a>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>