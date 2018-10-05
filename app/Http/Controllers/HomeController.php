<?php

namespace App\Http\Controllers;
use App\news;
class HomeController extends Controller
{
    public function viewaboutus()
    {
        return view('aboutus');
    }

    public function viewcontactus()
    {
        return view('contactus');
    }

    public function viewhelp()
    {
        return view('help');
    }

    public function viewwelcome()
    {
        return view('welcome');
    }
    public function viewnews()
    {
        $news=News::all();
        return view('news',compact('news'));
    }
}