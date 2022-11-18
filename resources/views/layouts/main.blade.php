<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
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
    @include('partials.login')
    @include('partials.register')
    @include('common.footer')
    @yield('scripts')

{{-- <script src=“https://code.jquery.com/jquery-3.1.1.min.js”> --}}

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

@yield('bottom_scripts')
</body>
</html>