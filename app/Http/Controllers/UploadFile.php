<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\build;
use Illuminate\Http\Request;
use App\Http\Requests\Admin;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

   public function store(Admin $request){
    $validated = $request->validated(['email', 'name', 'password']);
    if($validated){
        return back()->with('success', 'User created successfully');
    }
   }
function signup(){
    return view('signup');
} 
function displayCV(){
        $fileContents = file_get_contents('my-file.txt');
}

    
   public function view($id){
      
        $build = build::find($id);
        return view('displaycv', compact('build'));
    }
    function remove($id){
       DB::delete("DELETE FROM build WHERE id = ?", [$id]);
            // $build = build::find($id);
            // $build-> delete();
        
        return redirect('dashboard')->with('status', 'Data deleted Successfully'); 

    }
    
}
