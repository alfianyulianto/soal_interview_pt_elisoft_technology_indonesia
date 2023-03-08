<?php

use App\Helpers\SwapVariable;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TerbilangController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

// Soal nomer 1 dan 2
// Redirect jika url root
Route::get('/', function () {
  if (Auth::user()) {
    return redirect('/dashboard');
  } else {
    return redirect('/login');
  }
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Soal nomr 3
Route::resource('/users', UsersController::class)->middleware('auth');

// Soal 4
Route::get('/product/stock', function () {
  return
    Http::asForm()->post('http://149.129.221.143/kanaldata/Webservice/bank_account', [
      'bank_id' => 2
    ]);
})->middleware('auth');

// Soal nomer 6
Route::get('/swapping', function () {
  $result = SwapVariable::swappingVariable(10, 5);
  dd($result);
});

// Soal nomer 7
Route::get('/terbilang', [TerbilangController::class, 'index']);
Route::post('/terbilang', [TerbilangController::class, 'terbilang']);
