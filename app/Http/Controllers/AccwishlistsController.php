<?php

namespace App\Http\Controllers;
use App\Accwishlist;
use App\Euser;
use Session;
use Illuminate\Http\Request;

class AccwishlistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $data=[
            'accessory_name'=>$request->input('accessory_name'),
            'price'=>$request->input('price'),
            'euser_id'=>$request->input('euser_id'),
            'user'=>$request->input('user')

        ];
        Accwishlist::create($data);
        Session()->flash('notif','Added to wishlist successfully!');
        return back();
    }
    public function show($id){
        $accwishlists=Euser::find($id)->accwishlist;
        return view('accwishlist', compact('accwishlists'));
    }
    public function destroy($id)
    {
        $Accwishlists=Accwishlist::find($id);
        $Accwishlists->delete();
        Session()->flash('notifi','Wishlist Deleted!');
        return back();
    }
}
