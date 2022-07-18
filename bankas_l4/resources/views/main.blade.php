<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])  {{--  === VITE === --}}
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Lara Bank @yield('title')</title>
</head>
<body>
    
    @include('parts.nav')
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>

</body>
</html>
