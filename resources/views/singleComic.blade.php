@extends('templates.template')

@section('page_title', 'Single Comic')

@section('content')
<div class="blue-bar">

    <div class="container small">
        <img src="{{ $comic['thumb'] }}" alt="thumb">
    </div>
</div>
<div class="whitesection">
    <div class="container small">
        <div class="flex-container">
            <div class="comic-text">
                <h2>{{ $comic['title'] }}</h2>
                <div class="price-bar">
                    <p class="whitespace"> U.S. Price: <span class="white">{{$comic['price']}}</span> </p>
                    <p class="status">Available</p>
                    <p class="white">Check Availability &blacktriangledown;</p>
                </div>
                <p>{{$comic['description']}}</p>

            </div>
            <div class="adv-container">
                ADVERTISMENT
                <img src="/images/adv.jpg" alt="adv">
            </div>
        </div>
    </div>
</div>
@endsection

@section('content2')
<div class="greysection">
    <div class="container small clearfix">
        <div class="talent">
            <h2>Talent</h2>
            <p>Art by:
                @foreach($comic['artists'] as $artist)
                <a href="">{{$artist}}</a>
                @endforeach
            </p>
            <p>Written by:
                @foreach($comic['writers'] as $writer)
                <a href="">{{$writer}}</a>
                @endforeach
            </p>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <p>Series: {{$comic['series']}} </p>
            <p>U.S. Price: {{$comic['price']}}</p>
            <p>On Sale Date: {{$comic['sale_date']}}</p>
        </div>
    </div>

</div>
<div class="greybar">
    <div class="container small">
    <ul>
    <li><a href=""><img src="" alt="">DIGITAL COMICS</a></li>
    <li><a href=""><img src="" alt="">SHOP DC</a></li>
    <li><a href=""><img src="" alt="">COMIC SHOP LOCATOR</a></li>
    <li><a href=""><img src="" alt="">SUBSCRIPTIONS</a></li>
    </ul>
    </div>
</div>
@endsection
