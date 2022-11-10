@extends('layouts.main')

@section('content')
    <div class="hero">
        <div class="hero__left">
            
            <img src="/hero.jpg" alt=""><br><span><a href="https://www.freepik.com/free-vector/woman-with-glasses-uniform-demonstrating-her-strength-by-fist_12724941.htm#page=2&query=pop%20art%20pill&position=11&from_view=search&track=ais">Image by redgreystock</a> on Freepik</span></div>
        <div class="hero__right">
            <h2 class="hero__title">TITLE  OF THE PRODUCT</h2>
            <p class="hero__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos facilis velit, sed magnam a non accusamus asperiores natus nobis, similique consequatur dolores nesciunt. Eaque voluptatem repudiandae nemo in consequatur?</p>
            <button class="hero__button">Buy Now</button>
        </div>
    </div>
    <div class=featured></div>
    <div class="newsletter">
        <div class="newsletter__left">
            <h4 class="newsletter__left_title">NEWSLETTER</h4>
            <p class="newsletter__left_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos facilis velit, sed magnam a non</p>
        </div>
        <div class=newsletter__right>
            <input class="newsletter__right_input" type="text" placeholder="email address">
            <button class="newsletter__right_button">Subscribe</button>
        </div>
    </div>
    <div class="products"></div>
@endsection