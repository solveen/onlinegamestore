<?php

namespace App\Http\Controllers;
use App\Accreview;
use Illuminate\Http\Request;

class AccreviewController extends Controller
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
            'accessory_name' => $request->input('accessory_name'),
            'accessory_id'=>$request->input('accessory_id'),
            'reviewed_by'=>$request->input('reviewed_by')
        ];

        Accreview::create($data);
        Session()->flash('Review','Review added successfully');
        return back();
    }
}
