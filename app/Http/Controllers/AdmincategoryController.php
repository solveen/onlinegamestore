<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class AdmincategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();

        return view('admincategory', compact('categories'));
    }
    public function form()
    {

        return view('adminaddcategory');
    }
    public function store(Request $request)
    {
        $data=[
            'category'=>$request->input('category'),
            'category_image'=>'',
            'category_details'=>$request->input('category_details'),

        ];
        if($request->hasFile('category_image')){
            $imageUpload=$request->file('category_image');
            $imageName=date('Ymd-His').rand(00000,999999);
            $ext=$imageUpload->getClientOriginalExtension();
            $imgFullName=$imageName.".".$ext;
            $imageUpload->move(public_path("/images/upload"),$imgFullName);
            $data['category_image']=$imgFullName;
        }

        Category::create($data);

        return redirect("/admincategory")->with('status','Data Added Successfull');
    }

    public function edit($id)
    {
        $categories=Category::find($id);
        return view('admineditcategory',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $data = [
            'category' => $request->input('category'),
            'category_image' => '',
            'category_details' => $request->input('category_details'),

        ];
        if ($request->hasFile('category_image')) {
            $imageUpload = $request->file('category_image');
            $imageName = date('Ymd-His') . rand(00000, 999999);
            $ext = $imageUpload->getClientOriginalExtension();
            $imgFullName = $imageName . "." . $ext;
            $imageUpload->move(public_path("/images/upload"), $imgFullName);
            $data['category_image'] = $imgFullName;
        }
        $categories->update($data);
        return redirect('/admincategory');
    }

    public function destroy($id)
    {
        $categories=Category::find($id);
        $categories->delete($id);
        return redirect('/admincategory');

    }

}