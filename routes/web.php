<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ShortLinkController;


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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/',[ShortLinkController::class, 'home'])->name('home');



Route::get('/customer-registration', [ClientController::class, 'registration'])->name('customer.registration');
Route::post('/customer-store', [ClientController::class, 'store'])->name('customer.store');
Route::get('/registration-successful', [ClientController::class, 'success'])->name('registration.successful');


Route::get('/customer-login', [ClientController::class, 'login'])->name('customer.login');
Route::post('/customer-dologin', [ClientController::class, 'dologin'])->name('customer.dologin');

Route::get('/index',[ClientController::class, 'index'])->name('index');

Route::get('/customer-logout',[ClientController::class,'customerlogout'])->name('customer.logout');

// Route::get('/create-shortlink', [ShortLinkController::class, 'create'])->name('create.shortlink');

Route::get('/create-my-shortlink/{id}',[ShortLinkController::class,'myshortlink'])->name('my.shortlink');

Route::post('/stote-shortlink', [ShortLinkController::class, 'store'])->name('store.shortlink');
Route::get('/{code}', [ShortLinkController::class, 'shortendlink'])->name('code.shortlink');



Route::group(['middleware'=>'ClientCheck'],function(){

    Route::get('/create-shortlink', [ShortLinkController::class, 'create'])->name('create.shortlink');




});
