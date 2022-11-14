@extends('layouts.main')

@section('content')
    @vite('resources/css/pharmacy-page.scss')

    <div class="container">
        <div class="pharmacy">
            <div class="pharmacy__detail">
                <h1 class="pharmacy__detail_name">{{ $pharmacies->name }}</h1>
                <h2 class="pharmacy__detail_city">{{ $pharmacies->city }}</h2>
                <h3 class="pharmacy__detail_adress">{{ $pharmacies->address_line }}</h3>
                <h4 class="pharmacy__detail_number">+{{ $pharmacies->telephone_number }}</h4>
            </div>

            <div class="pharmacy__hours">
                <hr>
                <p class="pharmacy__monday">Monday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Thuesday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Wednesday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Thursday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Friday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Saturday: {{ $pharmacies->work_hours_open_at }} -
                    {{ $pharmacies->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__monday">Sunday: close</p>
                <hr>
            </div>
        </div>

        <div id="map">map will be here</div>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                const uluru = {
                    lat: {{$pharmacies->lat}},
                    lng: {{$pharmacies->long}}
                };
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 13,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }

            window.initMap = initMap;
        </script>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgvnUC2STMgsjJvDIlieRPYq43Fh9acJ4&callback=initMap">
            defer
        </script>
    </div>

    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
@endsection
