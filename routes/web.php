<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFile;
use App\Models\build;
use App\Http\Controllers\Register;
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
Route::get('/home', function () {
    return view('home' );
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    $builds = DB::table('build')->get();
    return view('admin', [
        
        'builds' => $builds

    ]);
});
Route::get('/table', function () {
    $builds = DB::table('build')->get();
    return view('table', [

        'builds' => $builds

    ]);
});
Route::get('/upload', function () {
    return view('upload'  );
});

Route::POST('/upload', function(){
    build::create([
        'email' => request('email'),
   'phone' => request('phone'),
  'title' => request('title'),
 'name' => request('name'),
  'location' => request('location'),
    'password' => request('password'),
    'cv' => request('cv'),
    'updated_at' => request('updated_at'),
    'created_at' => request('created_at'),
    ]);
   
    return redirect('/register');


});
Route::get('/', function() {
    $builds = DB::table('build')->get();
    return view('welcome', [
        'builds' => $builds
    ]);
Route::get('/createUser', 'UploadFile@create');
Route::post('/createuUser', 'UploadFile@store');
});
