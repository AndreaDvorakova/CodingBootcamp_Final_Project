@extends('layouts.main')
@section('content')
@vite('resources/css/cart-page.scss')
<div class="carts" id="carts"></div>

@viteReactRefresh
@vite("resources/js/cart.jsx")
@endsection