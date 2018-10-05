<?php

namespace App\Http\Controllers;
use App\Wishlist;
use Illuminate\Http\Request;
use App\Euser;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        $wishlists=EUser::find($id)->wishlist;
        return view('wishlist', compact('wishlists'));
    }
    public function store(Request $request)
    {
        $data=[
            'game_name'=>$request->input('game_name'),
            'price'=>$request->input('price'),
            'euser_id'=>$request->input('euser_id'),
            'user'=>$request->input('user')

        ];
        Wishlist::create($data);
        Session()->flash('noti','Product added to wishlist!');
        return back();
    }
    public function destroy($id)
    {
        $wishlists=Wishlist::find($id);
        $wishlists->delete();
        Session()->flash('notifi','Wishlist Deleted!');
        return back();
    }
    public function view()
    {
        return view('viewwishlists');
    }

}
