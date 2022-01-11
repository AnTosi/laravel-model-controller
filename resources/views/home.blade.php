@extends('layouts.app')

@section('content')
    <h1>These are our movies:</h1>
    <div class="movies">
        @forelse ($movies as $movie)
            <div class="card">
                <a href="">
                    <h4>{{ $movie->title }}</h4>
                    <img src="https://picsum.photos/200/" alt="">
                    <p>{{ $movie->original_title }}</p>
                    <p>Nationality: {{ $movie->nationality}}</p>
                    <p>Release Date: {{ $movie->date }}</p>
                    <p>Movie score: {{ $movie->vote }}</p>
                </a>
            </div>
        @empty
            <p>We are all out of movies :(</p>
        @endforelse
    </div>
@endsection