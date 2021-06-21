@extends('templates.template')

@section('page_title', 'Comics')

@section('content')
<div class="container">

    <div class="btn default abs-btn">
        CURRENT SERIES
    </div>
    <div class="card-container">
        @foreach($comicsArray as $comic)
        <div class="card">
        <a href="{{route('singleComic', ['id' => $comic['id']])}}">
            <img src="{{ $comic['thumb'] }}" alt="thumb">
         </a>   
            <h3>{{ $comic['title'] }}</h3>
        </div>
        @endforeach
    </div>
    <div class="btn default">LOAD MORE</div>
</div>
@endsection

@section('content2')
<div class="blue-container">
    <ul>
    <li><a href=""><img src="images/buy-comics-digital-comics.png" alt="DIGITAL COMICS">DIGITAL COMICS</a></li>
    <li><a href=""><img src="images/buy-comics-merchandise.png" alt="DC MERCHANDISE">DC MERCHANDISE</a></li>
    <li><a href=""><img src="images/buy-comics-subscriptions.png" alt="SUBSCRIPTION">SUBSCRIPTION</a></li>
    <li><a href=""><img src="images/buy-comics-shop-locator.png" alt="COMIC SHOP LOCATOR">COMIC SHOP LOCATOR</a></li>
    <li><a href=""><img src="images/buy-dc-power-visa.svg" alt="DC POWER VISA">DC POWER VISA</a></li>
    </ul>
</div>

@endsection
