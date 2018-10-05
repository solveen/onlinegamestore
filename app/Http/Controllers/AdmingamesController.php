<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accessory;
use App\Category;

class AdmingamesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $prices = Accessory::all();
        $categories = Category::all();

        return view('admingames', compact('categories','prices'));
    }

    public function store(Request $request)
    {
        $data=[
            'game_name'=>$request->input('game_name'),
            'category_id'=>$request->input('category_id'),
            'category'=>$request->input('category'),
            'game_image'=>'',
            'game_details'=>$request->input('game_details'),
            'price'=>$request->input('price')

        ];
        if($request->hasFile('game_image')){
            $imageUpload=$request->file('game_image');
            $imageName=date('Ymd-His').rand(00000,999999);
            $ext=$imageUpload->getClientOriginalExtension();
            $imgFullName=$imageName.".".$ext;
            $imageUpload->move(public_path("/images/upload"),$imgFullName);
            $data['game_image']=$imgFullName;
        }

        Game::create($data);

        return redirect("/admingamesedit")->with('status','Data Added Successfull');
    }

    public function show(){

        $games=Game::all();
        $games=Game::orderBy('id','desc')->paginate(5);
        return view('/admingamesedit',compact('games'));
    }
    public function destroy($id)
    {
        $games=Game::find($id);
        $games->delete();
        return redirect('/admingamesedit');

    }
    public function change($id){

        $games=Game::find($id);
        return view('/admingamesupdate',compact('games'));
    }

    public function update(Request $request, $id)
    {
        $games=Game::find($id);
        $data=[
            'game_name'=>$request->input('game_name'),
            'category_id'=>$request->input('category_id'),
            'category'=>$request->input('category'),
            'game_image'=>'',
            'game_details'=>$request->input('game_details'),
            'price'=>$request->input('price')

        ];
        if($request->hasFile('game_image')){
            $imageUpload=$request->file('game_image');
            $imageName=date('Ymd-His').rand(00000,999999);
            $ext=$imageUpload->getClientOriginalExtension();
            $imgFullName=$imageName.".".$ext;
            $imageUpload->move(public_path("/images/upload"),$imgFullName);
            $data['game_image']=$imgFullName;
        }

        $games->update($data);
        return redirect('/admingamesedit');
    }
}
