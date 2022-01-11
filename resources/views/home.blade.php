@extends('layouts.app')

@section('content')
    <h1>These are our movies:</h1>
    <div class="movies">
        @forelse ($movies as $movie)
            <div class="card">
                <a href="">
                    <h4>{{ $movie->title }}</h4>
                    <img src="https://picsum.photos/200/" alt="">
                    <p class="fw_600">{{ $movie->original_title }}</p>
                    <p><span class="fw_600">Nationality:</span> <span class="op_half">{{ $movie->nationality}}</span></p>
                    <p><span class="fw_600">Release Date:</span> <span class="op_half">{{ $movie->date }}</span></p>
                    <p><span class="fw_600">Movie score:</span> <span class="op_half">{{ $movie->vote }}</span></p>
                </a>
            </div>
        @empty
            <p>We are all out of movies :(</p>
        @endforelse
    </div>
@endsection