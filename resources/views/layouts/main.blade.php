<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Image Slider" />
    @yield('meta-tags')
    {{-- <link rel="stylesheet" href="css/home-page.scss"> --}}
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
    
    <title>I Pill Good</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/carousel.scss"> --}}
    @vite('resources/css/home-page.scss')
    @vite('resources/css/carousel.scss')
   
    
</head>
<body>
    @include('common.top-navigation')
    @yield('content')
    @include('common.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>