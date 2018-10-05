<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        $posts = Post::orderBy('id', 'asc')->paginate(6);
        return view('post', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user' => $request->input('user')
        ];

        Post::create($data);
        Session()->flash('Post','Post added successfully!');
        return redirect("post")->with('status', 'Data Added Successfull');

    }

    public function destroy( $id)
    {
        if (Auth::user()->admin == 1)
    {

        $posts = Post::find($id);
        $posts->delete();
        return redirect('/post');
    }
else
{
    return redirect('/post');
}
    }
    public function show($id)
    {

        $comments=Post::find($id)->comment;
        $post=Post::find($id);

        return view('comments',compact('comments','post','replies'));
    }
}