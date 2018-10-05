<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Game;
use App\category;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $games = Game::all();
        $categories=Category::all();
        $reviews=Review::orderBy('id','desc')->paginate(5);
        $games=Game::orderBy('id','desc')->paginate(8);
        return view('games',compact('games','categories','reviews'));
    }
    public function details($id)
    {
        $games = Game::where('id' , $id)->get();
        $reviews=Game::find($id)->review;
        return view('gamedetails', compact('games','reviews'));
    }
    }
