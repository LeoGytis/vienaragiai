<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Lara Bank @yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @yield('index-content')
            @yield('create-content')
            @yield('edit-content')
        </div>
    </div>

</body>
</html>
