<?php

namespace App\Http\Controllers;
use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news=News::orderBy('id','desc')->paginate(8);
        return view('adminnews',compact('news'));
    }
    public function show()
    {
        return view('adminaddnews');
    }


    public function store(Request $request)
    {
        $data=[
            'title'=>$request->input('title'),
            'news_image'=>'',
            'content'=>$request->input('content'),

        ];
        if($request->hasFile('news_image')){
            $imageUpload=$request->file('news_image');
            $imageName=date('Ymd-His').rand(00000,999999);
            $ext=$imageUpload->getClientOriginalExtension();
            $imgFullName=$imageName.".".$ext;
            $imageUpload->move(public_path("/images/upload"),$imgFullName);
            $data['news_image']=$imgFullName;
        }

        News::create($data);

        return redirect("/adminnews")->with('status','Data Added Successfull');
    }
    public function edit($id)
    {
        $news=News::find($id);
        return view('admineditnews',compact('news'));
    }
    public function update(Request $request, $id)
    {
        $news=News::find($id);
        $data=[
            'title'=>$request->input('title'),
            'news_image'=>'',
            'content'=>$request->input('content'),


        ];
        if($request->hasFile('news_image')){
            $imageUpload=$request->file('news_image');
            $imageName=date('Ymd-His').rand(00000,999999);
            $ext=$imageUpload->getClientOriginalExtension();
            $imgFullName=$imageName.".".$ext;
            $imageUpload->move(public_path("/images/upload"),$imgFullName);
            $data['news_image']=$imgFullName;
        }

        $news->update($data);
        return redirect('/adminnews');
    }
    public function destroy($id)
    {
        $news=News::find($id);
        $news->delete();
        Session()->flash('news','News removed!');
        return back();
    }

}
