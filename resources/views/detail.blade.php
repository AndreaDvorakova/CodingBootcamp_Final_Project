@extends('layouts.main')

@section('content')
@vite('resources/css/detail.scss')
    <div class="detail">
        <div class="detail__left">
            <img src="/images/drugs/{{$detail_drug->image}}" alt=""><br></div>
        <div class="detail__right">
            <h2 class="detail__title">{{$detail_drug->name}}</h2>
            <p class="detail__paragraph">{{Str::limit($detail_drug->description, 300)}}</p>
            {{-- <a href='/{{$detail_drug->id}}'><button class="detail__button">Buy Now</button></a> --}}
        </div>
    </div>
    {{-- {{dd($detail_drug->pharmacies)}} --}}
    <div class="pharmacy"><h2>Pharmacies</h2>
        @foreach ($detail_drug->pharmacies as $basket)
            <div class="pharmacy__basket">
                <span class="pharmacy__basket__name"><a href='/pharmacy-page/{{$basket->id}}'><h4>{{$basket->name}}</h4></a>
                    <span class="pharmacy__basket__address">Address</span>
                    <span class="pharmacy__basket__street">{{$basket->address_line}}</span>
                    <span class="pharmacy__basket__city">{{$basket->city}}</span>
                    <span class="pharmacy__basket__telephone">{{$basket->telephone_number}}</span>
                </span>
                <span class="pharmacy__basket__hours">Hours: <br>{{$basket->work_hours_open_at}} - {{$basket->work_hours_close_at}}</span>
                <div class="pharmacy__basket__order">
                    <span>Price: {{$basket->pivot->drug_price}}kc</span>
                    <span>In Stock: {{$basket->pivot->drug_quantity}}pcs</span>
                    <button class="pharmacy__basket__button">Add To Cart</button>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    
    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
@endsection

