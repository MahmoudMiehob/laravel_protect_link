<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckPassword;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/users', function () {


    if (Gate::allows('check-password')) {
        abort(404);
    }

    return view('users');



})->name('users');
//->middleware(Check_Password::class)




Route::get('/create_password',[CheckPassword::class,'createpassword'])->name('create.password');
Route::post('/update_password',[CheckPassword::class,'updatepassword'])->name('update.password');



Route::get('/posts', function () {
    return view('posts');
})->name('posts');