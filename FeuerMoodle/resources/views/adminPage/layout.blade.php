<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        @include('./_navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('./_footer')
    </body>
</html>