<?php

namespace pokemon\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){
        return view('pokemons.index');
    }
}
