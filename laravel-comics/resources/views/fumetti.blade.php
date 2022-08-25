@extends('layouts.app')

@section('main_content')
<section>
    <div class="jumbotron">
    </div>
    <div class="container">
        <div class="card-flex">
            @foreach ($comics_array as $comics)
                <div class="card">
                    <a href=" {{ route('dettagli_fumetto', [
                        'id' => $comics['id']
                    ]) }} ">
                        <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                        <h3>{{$comics['title']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="button" href="#">LOAD MORE</a>
    </div>
</section>
    
@endsection