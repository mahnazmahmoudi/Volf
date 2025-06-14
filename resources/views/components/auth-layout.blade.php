<!DOCTYPE html>
<html lang="en">
<head>
    <title>volf commiunications {{ $title ?? '' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/main.css') }}">
</head>
<body>

{{ $slot }}

<script src="{{ asset('auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('auth/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('auth/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('auth/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="{{ asset('auth/js/main.js') }}"></script>
</body>
</html>
