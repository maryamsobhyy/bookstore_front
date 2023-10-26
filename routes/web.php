<?php

use App\Models\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\maincontroller;
use App\Http\Controllers\front\homecontroller;
use App\Http\Controllers\front\shopcontroller;
use App\Http\Controllers\front\refundcontroller;
use App\Http\Controllers\admin\productcontroller;
use App\Http\Controllers\front\aboutuscontroller;
use App\Http\Controllers\front\privacycontroller;
use App\Http\Controllers\front\branchescontroller;
use App\Http\Controllers\front\contactuscontroller;
use App\Http\Controllers\front\favouritescontroller;
use App\Http\Controllers\front\trackordercontroller;
use App\Http\Controllers\authentication\authcontroller;


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


Route::get('/',[homecontroller::class,'index'])->name('home');
route::get('/favourites',[favouritescontroller::class,'index'])->name('favourite');
route::get('/login',[authcontroller::class,'login'])->name('login');
route::post('/login/submit',[authcontroller::class,'loginlogic'])->name('loginsubmit');
route::get('/trackorder',[trackordercontroller::class,'index'])->name('trackorder')->middleware('auth');
route::get('/refund_policy',[refundcontroller::class,'index'])->name('refund');
route::get('/privacy_policy',[privacycontroller::class,'index'])->name('privacy');
route::get('/contactus',[contactuscontroller::class,'index'])->name('contactus');
route::get('/aboutus',[aboutuscontroller::class,'index'])->name('aboutus');
route::get('/branch',[branchescontroller::class,'index'])->name('branches');
route::get('/shop',[shopcontroller::class,'index'])->name('shop')->middleware('auth');
route::get('/shop/singleproduct',[shopcontroller::class,'show'])->name('shop.show');
Route::get('/dashboard', [maincontroller::class, 'index'])
    ->name('home.index');
Route::post('/logout', [authcontroller::class, 'logout'])->name('logout');

Route::get('/productsss', [productcontroller::class, 'index'])
    ->name('products.index');
Route::get('/profile', function(){
    // $guards=array_slice(config('auth.guards'),0,-1);
    // dd($guards);


});

