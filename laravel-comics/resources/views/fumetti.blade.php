@extends('layouts.app')

@section('main_content')
<section>
    <div class="jumbotron">
    </div>
    <div class="container">
        <div class="card-flex">
            @foreach ($comics_array as $comics)
                <div class="card">
                    <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                    <h3>{{$comics['title']}}</h3>
                </div>
            @endforeach
        </div>
        <a class="button" href="#">LOAD MORE</a>
    </div>
</section>
    
@endsection