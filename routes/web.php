<?php


use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/hotel', function () {
    return view('/hotel');
});

Route::get('/hotel', function () {
    $hotels=Hotel::all();
    return view('hotel', [
        'hotels' => $hotels
    ]);
});

Route::resource('hotel', HotelController::class); 


Route::get('/hotel/add', [HotelController::class, 'create']);
Route::post('/hotel/add', [HotelController::class, 'store']);

Route::get('/hotel/detail/{id}',[HotelController::class,'show']);


Route::get('/hotel/edit/{id}', [HotelController::class, 'edit']);
Route::post('/hotel/update/{id}', [HotelController::class, 'update']);

Route::get('/hotel/delete/{id}', [HotelController::class, 'destroy']);
