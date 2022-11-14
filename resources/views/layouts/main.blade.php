<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/home-page.scss"> --}}
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>I Pill Good</title>
    @vite('resources/css/home-page.scss')
    
</head>
<body>
    @include('common.top-navigation')
    @yield('content')
    @include('common.footer')
</body>
</html>