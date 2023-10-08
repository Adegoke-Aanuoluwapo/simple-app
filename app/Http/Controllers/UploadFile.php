<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\build;
use Illuminate\Http\Request;
use App\Http\Requests\Admin;

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
   public function create()
   {
    return view('createUser');
   }

   public function store($Admin $request){
    $validated = $request->validated();
    if($validated){
        return back()->with('success', 'User created successfully');
    }
   }
}
