<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "";


    public function render()
    {
        $data = ['searchResult' => []];

        if(strlen($this->search) > 2){
        $data['searchResult'] = collect(Http::withToken(config('services.tmdb.token'))
        ->get("https://api.themoviedb.org/3/search/movie?query=$this->search")
        ->json()['results'])->take(6);
        }

        return view('livewire.search-dropdown',$data);
    }
}
