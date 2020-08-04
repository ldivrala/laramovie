<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $data = [];
        $data['populerMovies'] = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];


        $data['nowPlayingMovies'] = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()["genres"];

        $data['genres'] = collect($genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        return view("index", $data);
    }
    public function show($id)
    {
        $data['movie'] = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/movie/$id?append_to_response=images,credits,videos")
            ->json();

        return view("show", $data);
    }
}
