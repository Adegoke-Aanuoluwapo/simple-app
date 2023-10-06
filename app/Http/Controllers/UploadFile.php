<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\build;
use Illuminate\Http\Request;

class UploadFile extends Controller
{
    function UploadFile(Request $request){
        return $request->file('file')->store('docs');
    }
    function getData(){
        return 'form data will be here';
    }
    public function index(){
        $builds = build::all();
        return view('admin', compact('build'));
    }
}
