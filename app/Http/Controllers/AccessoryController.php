<?php

namespace App\Http\Controllers;
use App\Accessory;
use Illuminate\Http\Request;
use App\Accreview;
class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $accessories = Accessory::all();
        $accessories=Accessory::orderBy('id','asc')->paginate(6);

        return view('adminaccessory', compact('accessories','accreviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(){
        return view('accessoryform');
    }
    public function details($id)
    {
        $accessories = Accessory::where('id' , $id)->get();
        $accreviews=Accessory::find($id)->accreview;
        return view('accessorydetails', compact('accessories','accreviews'));
    }
    public function show(){
        $accessories = Accessory::all();
        $accessories=Accessory::orderBy('id','asc')->paginate(6);
        $accreviews=Accreview::orderBy('id','asc')->paginate(5);
        return view('accessory', compact('accessories','accreviews'));
    }


    public function store(Request $request)
    {
        $data = [

            'accessory_name' => $request->input('accessory_name'),
            'price'=> $request->input('price'),
            'accessory_image'=>'',
            'details'=> $request->input('details'),
            'accessory_category' => $request->input('accessory_category'),
        ];
              if($request->hasFile('accessory_image')){
                  $imageUpload=$request->file('accessory_image');
                  $imageName=date('Ymd-His').rand(00000,999999);
                  $ext=$imageUpload->getClientOriginalExtension();
                  $imgFullName=$imageName.".".$ext;
                  $imageUpload->move(public_path("/images/upload"),$imgFullName);
                  $data['accessory_image']=$imgFullName;
              }

        Accessory::create($data);
        return redirect("/adminaccessory")->with('status','Data Added Successfull');
    }
    public function destroy($id)
    {
        $accessories=Accessory::find($id);
        $accessories->delete();
        return redirect('adminaccessory');

    }
    public function edit($id){

        $accessories=Accessory::find($id);
        return view('/editaccessory',compact('accessories'));
    }
    public function update(Request $request, $id)
    {
        $Accessories = Accessory::find($id);
        $data = [
            'accessory_name' => $request->input('accessory_name'),
            'price'=> $request->input('price'),
            'accessory_image' => '',
            'details'=> $request->input('details'),
            'accessory_category' => $request->input('accessory_category'),
        ];
        if ($request->hasFile('accessory_image')) {
            $imageUpload = $request->file('accessory_image');
            $imageName = date('Ymd-His') . rand(00000, 999999);
            $ext = $imageUpload->getClientOriginalExtension();
            $imgFullName = $imageName . "." . $ext;
            $imageUpload->move(public_path("/images/upload"), $imgFullName);
            $data['accessory_image'] = $imgFullName;
        }
        $Accessories->update($data);
        return redirect('adminaccessory');
    }
}

