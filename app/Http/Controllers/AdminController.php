<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Euser;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Euser::all();

        return view('admin',compact('users'));
    }
    public function edit($id)
    {
        $users=Euser::find($id);
        return view('adminuseredit',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users=Euser::find($id);
        $data=([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'address'=>$request->input('address'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email'),
            $users->password = Hash::make($request->input('password'))
        ]);
        $users->update($data);
        return redirect('admin');
    }

    public function destroy($id)
    {
        $users=Euser::find($id);
        $users->delete();
        return redirect('admin');

    }
}

