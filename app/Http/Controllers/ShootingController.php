<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
use App\Category;
class ShootingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $games = Category::find(1)->game;
        $reviews = Category::find(1)->review;
        return view('shooting',compact('games','reviews'));
    }
}
