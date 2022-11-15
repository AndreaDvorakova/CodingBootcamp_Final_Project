@extends('layouts.main')

@section('content')
    @vite('resources/css/pharmacy-page.scss')


    <div class="container">
        <div class="pharmacy">
            <div class="pharmacy__detail">
                <h1 class="pharmacy__detail_name">{{ $pharmacy->name }}</h1>
                <h2 class="pharmacy__detail_city">{{ $pharmacy->city }}</h2>
                <h3 class="pharmacy__detail_adress">{{ $pharmacy->address_line }}</h3>
                <h4 class="pharmacy__detail_number">+{{ $pharmacy->telephone_number }}</h4>
            </div>

            <div class="pharmacy__hours">
                <hr>
                <p class="pharmacy__day">Monday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Thuesday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Wednesday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Thursday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Friday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Saturday: {{ $pharmacy->work_hours_open_at }} -
                    {{ $pharmacy->work_hours_close_at }}</p>
                <hr>
                <p class="pharmacy__day">Sunday: close</p>
                <hr>
            </div>
        </div>

        <div class="items" id="items">
            {{-- <h1>Another drugs at this pharmacy</h1> --}}
            {{-- <p>{{$id->drug_id}}</p> --}}
            @foreach ($pharmacy->drugs as $drug)
                <div class="item">
                    <img class="item__img" src="/images/drugs/{{ $drug->image }}" alt="">
                    <h5>{{ $drug->name }}</h5>
                    <p>{{ $drug->pivot->drug_quantity }} quantity </p>
                    <p class="item__description">{{ $drug->description }}</p>
                    
                </div>
            @endforeach

            <button class="item-arrow" id="item-arrow-prev">
                &#8249;
            </button>
            <button class="item-arrow" id="item-arrow-next">
                &#8250;
            </button>

            {{-- <script>
                $('item__img').click(function() {
                    $('item__description', this).toggle();
                });
            </script> --}}

            <script>
                const slidesContainer = document.getElementById("items");
                const slide = document.querySelector(".item");
                const prevButton = document.getElementById("item-arrow-prev");
                const nextButton = document.getElementById("item-arrow-next");

                nextButton.addEventListener("click", () => {
                    const slideWidth = slide.clientWidth;
                    slidesContainer.scrollLeft += slideWidth;
                });

                prevButton.addEventListener("click", () => {
                    const slideWidth = slide.clientWidth;
                    slidesContainer.scrollLeft -= slideWidth;
                });
            </script>
        </div>

        <div id="map">map will be here</div>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                const uluru = {
                    lat: {{ $pharmacy->lat }},
                    lng: {{ $pharmacy->long }}
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
    @php
        $pharmacy->drugs;
        // dd($pharmacy->pivot->drug_quantity);
    @endphp

    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
@endsection
