<?php

namespace App\Http\Controllers;
use App\Euser;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=Euser::all();

        return view('userprofile',compact('users'));
    }
    public function edit($id)
    {
        $users=Euser::find($id);
        return view('edituserprofile',compact('users'));
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
        return redirect('userprofile');
    }
    public function destroy($id)
    {
        $users=Euser::find($id);
        $users->delete();
        return redirect('userprofile');

    }
}
