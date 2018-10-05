<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Game;

class RacingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $games = Category::find(3)->game;
        $reviews = Category::find(3)->review;
        return view('racing',compact('games','reviews'));
    }
}
