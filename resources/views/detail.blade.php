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
    <div class=pharmacy_baskets></div>
    
    @viteReactRefresh
    @vite('resources/js/drugs.jsx')
@endsection

