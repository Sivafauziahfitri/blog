<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class youtubecontroller extends Controller
{
    public function index()
    {
    return view('contents.index');
}

    public function show(){
        return view('contents.show');
    }
}