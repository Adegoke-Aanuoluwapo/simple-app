<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\build;
use Illuminate\Http\Request;
use App\Http\Requests\Admin;
use Illuminate\Support\Facades\Auth;

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

    function displayTextFile($filePath)
    {
        if (file_exists($filePath) && is_readable($filePath)) {
            // Set the content type to plain text
            header('Content-Type: text/plain');

            // Output the file contents
            echo file_get_contents($filePath);
        } else {
            echo "The file doesn't exist or is not readable.";
        }
        $filePath = public_path() . '/uploads';

        return view('displaycv', [$filePath]);
      
    }
    
}
