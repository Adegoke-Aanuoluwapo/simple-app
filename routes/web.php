<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFile;
use App\Models\build;
use Illuminate\Support\Facades\Facade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome' );
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/upload', function () {
    return view('upload' );
});

Route::POST('/upload', function(){
    build::create([
        'email' => request('email'),
   'phone' => request('phone'),
  'title' => request('title'),
 'name' => request('name'),
  'location' => request('location'),
    'cv' => request('cv'),
    'updated_at' => request('updated_at'),
    'created_at' => request('created_at'),
    ]);
   
    return redirect('/upload');


});
Route::get('/', function() {
    $builds = DB::table('build')->get();
    return view('welcome', [
        'builds' => $builds
    ]);
});
