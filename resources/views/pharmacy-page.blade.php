@extends('layouts.main')

@section('content')
    @vite('resources/css/pharmacy-page.scss')



    {{-- <div class="container"> --}}
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


        {{-- serch bar --}}
        {{-- <div class="search_bar" id="search_bar">

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search in {{$pharmacy->name}}" value="">
            <ul id="myUL">
                @foreach ($pharmacy->drugs as $drug)
                <li>
                    <a href="#" class="items__item-name" >{{ $drug->name }}</a>
                </li>
                @endforeach
            </ul>
        
            
            <script>
                function myFunction() {
                  // Declare variables
                  var input, filter, ul, li, a, i, txtValue;
                  input = document.getElementById('myInput');
                  filter = input.value.toUpperCase();
                  ul = document.getElementById("myUL");
                  li = ul.getElementsByTagName('li');
                
                  // Loop through all list items, and hide those who don't match the search query
                  for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      li[i].style.display = "";
                    } else {
                      li[i].style.display = "none";
                    }
                  }
                }
                </script>
        
        </div> --}}

        <div class="items" id="items">
            {{-- <h1>Another drugs at this pharmacy</h1> --}}
            {{-- <p>{{$id->drug_id}}</p> --}}



            @foreach ($pharmacy->drugs as $drug)
                <div class="items__item">
                    <h5 class="items__item-name" >{{ $drug->name }}</h5>
                    <a href="{{ url('drugs' , [ 'id' => $drug->id ]) }}/detail"><img class="items__item-img"  src="/images/drugs/{{ $drug->image }}" alt=""></a>
                    <span >{{ $drug->pivot->drug_price }} Kc </span>
                    {{-- <p >{{ $drug->pivot->drug_price }} Kc </p> --}}
                    <div id="myModal" class="modal">
                        <div class="modal-conten">
                            <span class="close">&times;</span>
                            <p class="items__item-description"> {{ $drug->description }}</p>
                        </div>
                    </div>
                    <button class="items__item-button" id="myBtn">Description</button>
                    
                        
                    
{{--                     
                    <div class="item_btn" id="item__baskets"> 
                        <button class="btn_plus">-</button>
                        <button class="btn_minus">+</button>
                    </div>
                    <button class="btn_add">Add to cart</button> --}}
                    
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
        @vite('resources/js/drugs.jsx'),
        {{-- @vite('resources/js/details.jsx') --}}
    @endsection
