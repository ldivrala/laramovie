<div class="relative">
    <input type="text" wire:model.debounce.500ms="search"
        class="bg-gray-700 rounded-full text-center md:w-64 w-40 ml-8 px-8 py-1 text-base focus:outline-none focus:shadow-outline"
        placeholder="Search">
    <div class="absolute top-0 mt-1 ml-12">
        <i class="fas fa-search text-gray-500 fa-xs"></i>
    </div>

    @if (strlen($search)>2)
    <div class="absolute w-64 ml-8 mt-1">
        <div class="bg-gray-700 flex items-center px-4 py-1 rounded border-b border-gray-800">
        @if (count($searchResult) > 0 )
        @foreach ($searchResult as $result)
            @if ($result["poster_path"])
            <img src="https://image.tmdb.org/t/p/w92{{ $result["poster_path"]}}" class="h-12"
                alt="{{$result['title']}}">
            @endif
            <a href="/movie/{{$result['id']}}">{{$result['title']}}</a>
            @endforeach

            @else<div>Sorry!!! No result found for "{{$search}}"</div>
            @endif
        </div>
    </div>
    @endif
</div>
