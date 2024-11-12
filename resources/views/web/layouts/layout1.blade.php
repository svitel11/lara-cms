<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1st Car Recovery - Home</title>
    @vite(['resources/scss/web/app.scss'])

</head>
<body>
<div class="bg-fixed-full blur-xs-and-brighten" style="background-image: url('/assets/images/1st-car-recovery-bg.webp');"></div>

@include('web.partials.header')

@yield('content')

@include('web.partials.footer')

</body>
</html>
