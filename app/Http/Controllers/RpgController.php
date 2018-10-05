<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Game;
class RpgController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $games = Category::find(2)->game;
        $reviews = Category::find(2)->review;
        return view('rpg',compact('games','reviews'));
    }
}
