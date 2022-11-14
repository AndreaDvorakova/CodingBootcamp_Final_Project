@extends('layouts.main')

@section('content')
    <h1>Pharmacy</h1>

    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
@endsection