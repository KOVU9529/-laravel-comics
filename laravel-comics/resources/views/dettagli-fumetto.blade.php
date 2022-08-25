@extends('layouts.app')
@section('main_content')
<div class="jumbotron">
</div>
<div class="blu">
<img class="img-singola" src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
</div>
<div class="info">
    <div class="container">
        <h1>{{ $current_comics['title'] }}</h1>
        <div class="card-info">
            <div class="card-text">
                <div class="green-price">
                    <div class="price">
                        U.S. Price: {{ $current_comics['price'] }} <span>AVAILABLE</span>
                    </div>
                    <div class="available">
                        Check Available
                    </div>
                </div>
                <div class="description">
                    <p class="description">
                        {{ $current_comics['description'] }}
                    </p>
                </div>
            </div>
            <div class="card-img">
                AVERTISEMENT
                <img  src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
            </div>
        </div>
       
    </div>
    <div class="card-point">
        <div class="card-point-container">
            <div class="card-col-one">
                TALENT
                <hr>
                Art by: 
                <p>
                    @foreach ($current_comics['artists'] as $artists)
                    {{$artists}}
                    @endforeach
                </p>
                <hr>
                Written by: 
                <p>
                    @foreach ($current_comics['writers'] as $writers)
                    {{$writers}}
                    @endforeach
                </p>
                <hr>
            </div>
            <div class="card-col-two">
                SPECS
                <hr>
                Series: <span class="serie">{{ $current_comics['series'] }}</span>
                <hr>
                U.S. Price:  {{ $current_comics['price'] }}
                <hr>
                On Sale Date: {{ $current_comics['sale_date'] }}
                <hr>
            </div>

        </div>
        
    </div> 
</div>
    
@endsection