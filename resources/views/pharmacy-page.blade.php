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
                <div class="items__item">
                    <h5 class="items__item-name">{{ $drug->name }}</h5>
                    <img class="items__item-img" src="/images/drugs/{{ $drug->image }}" alt="">
                    <span>{{ $drug->pivot->drug_quantity }} quantity </span>
                    <div id="myModal" class="modal">
                        <div class="modal-conten">
                            <span class="close">&times;</span>
                            <p class="items__item-description"> {{ $drug->description }}</p>
                        </div>
                    </div>
                    <button class="items__item-button" id="myBtn">Description</button>



                </div>
            @endforeach

            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btns = document.querySelectorAll("#myBtn");

                // Get the <span> element that closes the modal
                var spans = document.querySelectorAll(".close");
                // console.log(spans);

                // When the user clicks the button, open the modal 
                btns.forEach(btn => {

                    btn.onclick = function(e) {
                        console.log(e);
                        e.target.parentNode.childNodes[7].style.display = "block";
                        //   modal.innerText=e.target.parentElement.childNodes[2]

                    }
                });


                // When the user clicks on <span> (x), close the modal
                spans.forEach(span => {

                    span.onclick = function(e) {
                        console.log(e);
                        e.target.parentNode.parentNode.style.display = "none";
                    }
                })

                // When the user clicks anywhere outside of the modal, close it
                // window.onclick = function(event) {
                //     if (event.target == modal) {
                //         modal.style.display = "none";
                //     }
                // }
            </script>


            <button class="item-arrow" id="item-arrow-prev">
                &#8249;
            </button>
            <button class="item-arrow" id="item-arrow-next">
                &#8250;
            </button>


            <script>
                const slidesContainer = document.getElementById("items");
                const slide = document.querySelector(".items__item");
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
        <div id="map">map will be here
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
            @php
                $pharmacy->drugs;
                // dd($pharmacy->pivot->drug_quantity);
            @endphp
        </div>

        @viteReactRefresh
        @vite('resources/js/drugs.jsx')
    @endsection
