<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\MailController;
use App\Models\build;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/mail', [MailController::class, 'sendMail']
);
Route::get('/signup', [UploadFile::class, 'signup']);

Route::get('/dashboard', function () {
    $builds = DB::table('build')->get();
    return view('dashboard', [
        'builds' => $builds
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::POST('/upload', function () {
    $fileName = "";
    if (request()->hasFile('cv')) {
        $file = request()->file('cv');
        $fileName = $file->hashName();
        $destinationPath = public_path() . '/uploads';
        $file->move($destinationPath, $fileName);
    }
    build::create([
        'email' => request('email'),
        'phone' => request('phone'),
        'title' => request('title'),
        'name' => request('name'),
        'location' => request('location'),
        
        'cv' => $fileName,
        'updated_at' => request('updated_at'),
        'created_at' => request('created_at'),
    ]);


    return redirect('/signup');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
