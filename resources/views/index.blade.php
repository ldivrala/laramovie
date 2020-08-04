@extends('layouts.main')

@section('content')
<div class="border-b border-gray-800">
    <div class="container px-10 py-8">
        <div class="populer-movies">
            <h2 class="text-orange-500 tracking-wider text-lg uppercase font-semibold">Populer Movies</h2>
        </div>

        <div class="grid md:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach ($populerMovies as $movie)
            @if ($loop->index
            <10) <x-movie-card :movie="$movie" :genres="$genres" />
            @endif
            @endforeach
        </div>
        <div class="text-right">
            <button class="secondary-g rounded-lg shadow-inner border-purple-700 text-gray-100 px-4 py-1">
                <span class="font-semibold">Next</span>
                <i class="fas fa-arrow-right pr-1"></i>
            </button>
        </div>
    </div>
</div>
<div>
    <div class="container px-10 py-8">
        <div class="now playing">
            <h2 class="text-orange-500 tracking-wider text-lg uppercase font-semibold">now playing</h2>
        </div>

        <div class="grid md:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach ($nowPlayingMovies as $movie)
            @if ($loop->index
            <10) <x-movie-card :movie="$movie" :genres="$genres" />
            @endif
            @endforeach
        </div>
    </div>
    @endsection
