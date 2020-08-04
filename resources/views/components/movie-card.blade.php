<div>
    <div class="mt-6 movie">
        <a href="/movie/{{ $movie['id'] }}">
        <img src="https://image.tmdb.org/t/p/w500/{{ $movie["poster_path"]}}" alt="Special Ops"
            class="hover:opacity-75 object-cover" style="height:19rem;">
        </a>
        <div class="mt-2">
            <a href="/movie/{{ $movie['id'] }}" class="text-lg hover:text-gray-500 mt-1">{{ $movie["title"] }}</a>
            <div class="flex items-center text-gray-200">
                <span> <i class="fas fa-star fa-sm text-orange-500"></i> </span>
                <span class="ml-2">{{ $movie["vote_average"] * 10 . "%" }}</span>
                <span class="mx-2">|</span>
                <span> {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }} </span>
            </div>
            <div class="text-gray-300">
                @foreach($movie['genre_ids'] as $genre)
                {{ $genres[$genre] }}@if(!$loop->last), @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
