    @extends('layouts.main')
    

@section('content')
    <div class="hero">
        <div class="hero__left">
            
            <img src="/hero.jpg" alt=""><br><span><a href="https://www.freepik.com/free-vector/woman-with-glasses-uniform-demonstrating-her-strength-by-fist_12724941.htm#page=2&query=pop%20art%20pill&position=11&from_view=search&track=ais">Image by redgreystock</a> on Freepik</span></div>
        <div class="hero__right">
            <h2 class="hero__title">{{$hero_drug->name}}</h2>
            <p class="hero__paragraph">{{Str::limit($hero_drug->description, 200)}}</p>
            <a href='/drugs/{{$hero_drug->id}}/detail'><button class="hero__button">Buy Now</button></a>
        </div>
    </div>
    
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    </div>
    
    
    <div class="newsletter">
        <div class="newsletter__left">
            <h4 class="newsletter__left_title">NEWSLETTER</h4>
            <p class="newsletter__left_paragraph">Sign up here to get the latest news, updates and special offers.</p>
        </div>
        <div class=newsletter__right id="newsletter">
            {{-- <input class="newsletter__right_input" type="text" placeholder="email address">
            <button class="newsletter__right_button">Subscribe</button> --}}
        </div>
    </div>
    <div class="products" id="products"></div>

    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
    @vite('resources/js/carousel_entry.jsx')
    @vite('resources/js/newsletter_entry.jsx')

    
    

@endsection