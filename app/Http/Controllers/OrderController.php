<?php

namespace App\Http\Controllers;
use App\Order;
use App\Euser;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $orders = Order::all();
        $orders=Order::orderBy('id','desc')->paginate(8);
        return view('adminorders', compact('orders'));
    }
    public function store(Request $request)
    {
        $data=[
            'product_name'=>$request->input('product_name'),
            'price'=>$request->input('price'),
            'euser_id'=>$request->input('euser_id'),
            'user'=>$request->input('user')

        ];
        Order::create($data);
        Session()->flash('notify','Product ordered!');
        return back();
    }
    public function destroy($id)
    {
        $orders=Order::find($id);
        $orders->delete();
        Session()->flash('cancel','Order canceled!');
        return back();
    }
    public function show($id){
    $orders=EUser::find($id)->order;
    return view('order', compact('orders'));

}
public function view(){
        return view('orderview');
}

}
