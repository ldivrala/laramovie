@extends('layouts.main')

@section('content')
<div>
    <div class="movie-info border-b border-gray-800">
        <div class="md:px-16 px-10 py-12 mx-auto container md:flex">
            <img src="https://image.tmdb.org/t/p/w500{{ $movie["poster_path"]}}" alt="ops"
                class="object-cover ml-3 h-72">
            <div class="md:ml-24">
                <h1 class="font-semibold text-4xl"> {{ $movie["title"] }}</h1>
                <div class="md:flex flex-wrap items-center text-gray-200">
                    <span> <i class="fas fa-star fa-sm text-orange-500"></i> </span>
                    <span class="ml-1">{{ $movie["vote_average"] * 10 . "%" }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach($movie['genres'] as $genre)
                        {{$genre["name"]}}@if(!$loop->last), @endif
                        @endforeach
                    </span>
                </div>
                <div class="mt-4 text-gray-300 font-semibold pr-16">
                    <p>{{$movie['overview']}}</p>
                </div>
                <div class="mt-12">
                    <h4 class="text-xl font-bold text-gray-300">Featured Crew</h4>
                    <div class="flex flex-wrap mt-2 text-gray-300">
                        @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop->index<3) <div>
                            <h6 class="font-semibold mr-20">{{$crew['name']}}</h6>
                            <p>{{$crew['job']}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="mt-10">
                <button
                    class="items-center flex secondary-g rounded-md text-gray-900 font-semibold text-lg px-4 py-1 hover:opacity-75 border-gray-700 shadow-inner">
                    <i class="fas fa-play-circle mr-2"></i>
                    <span>Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="md:px-16 movie-cast px-10 py-12 mx-auto container border-b border-gray-800">
    <div class="px-3">
        <div>
            <h2 class="text-orange-500 tracking-wider text-lg uppercase font-semibold">cast</h2>
        </div>

        <div class="grid md:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop->index<5 )
            <div class="mt-6 movie">
                <a href="#">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $cast["profile_path"]}}" alt="Special Ops" class="hover:opacity-75 object-cover"
                        style="height:19rem;">
                </a>
                <div class="mt-2">
                    <a href="" class="hover:text-gray-600">
                        <h4 class="font-semibold text-lg text-gray-100">{{ $cast["character"]}}</h4>
                    </a>
                    <p class="text-gray-100">{{ $cast["name"]}}</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

<div class="md:px-16 movie-image px-10 py-12 mx-auto container border-b border-gray-800">
    <div class="px-3">
        <div>
            <h2 class="text-orange-500 tracking-wider text-lg uppercase font-semibold">Images</h2>
        </div>

        <div class="grid md:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index<5)
            <div class="mt-6 movie">
                <a href="#">
                    <img src="https://image.tmdb.org/t/p/original{{ $image["file_path"]}}" alt="Special Ops" class="hover:opacity-75 object-cover"
                        style="height:19rem;">
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
