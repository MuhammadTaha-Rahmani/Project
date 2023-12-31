<?php

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
// Route::pattern('id', '[0-9]+');
Route::view("/" , "welcome");

Route::match(['get' , 'post'],'/about', function () {
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/ali' , function () {
    DB::table('contact')->where('id' , 1)->delete();
});
Route::post('/section', function (Request $request){
    
    $messeges = new Messages;
    $messeges->firstName = $request->firstName;
    $messeges->lastName = $request->lastName;
    $messeges->phoneNumber = $request->phoneNumber;
    $messeges->message = $request->message;
    $messeges->save();
    return redirect('/contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
// Route::redirect('/contact', '/about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
