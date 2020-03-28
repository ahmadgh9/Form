<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href = {{ asset("assets/normalize.css") }} rel="stylesheet" />
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <link href = {{ asset("bootstrap/css/bootstrap-grid.css") }} rel="stylesheet" />
    <script !src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
