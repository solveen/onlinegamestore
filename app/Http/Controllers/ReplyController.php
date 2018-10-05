<?php

namespace App\Http\Controllers;
use App\reply;
use App\Comment;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $request)
    {
        $data = [
            'reply' => $request->input('reply'),
            'user' => $request->input('user'),
            'comment_id' => $request->input('comment_id'),
            'post_id'=>$request->input('post_id')
        ];

        Reply::create($data);
        Session()->flash('Reply','Reply successfull!,Now See replies by clicking view replies');
        return back();
    }
    public function show($id){

        $replies=Comment::find($id)->reply;
        $comments=Comment::find($id);
        return view('viewreplies',compact('replies','comments'));
    }

}
