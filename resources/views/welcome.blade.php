@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
<main>
    <div class="content-container">
        <div class="content">
            @foreach ($cards as $card)
            <div class="card">
                <img src="{{$card['thumb']}}" alt="">
                <p>
                    {{$card['series']}}
                </p>
                
            </div>
            @endforeach
            <button>LOAD MORE</button>
        </div>
    </div>
</main>

@endsection