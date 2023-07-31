<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $extends = $request->extend ?? [];
        $genre = Genre::with($extends)->paginate(
            $request->perPage ?? 5,
            ['*'],
            'page',
            $request->page ?? 0
        );

        return response()->json($genre);
    }
}
