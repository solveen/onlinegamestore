<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(request $request)
    {
        $data = [
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
            'game_name' => $request->input('game_name'),
            'game_id'=>$request->input('game_id'),
            'category_id'=>$request->input('category_id'),
            'reviewed_by'=>$request->input('reviewed_by')
        ];

        Review::create($data);
        Session()->flash('Review','Review added successfully');
        return back();
    }

}
