<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $comments=Comment::all();
        $posts=Post::all();
        return view('comments',compact('comments','posts'));
    }
    public function store(Request $request)
    {

        $data = [
            'comment' => $request->input('comment'),
            'user' =>$request->input('user'),
            'post_id' => $request->input('post_id')
        ];

        Comment::create($data);
        Session()->flash('Comment','Comment successfull!');
        return back();
    }
}