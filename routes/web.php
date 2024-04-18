<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[AdminController::class,'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['web','auth']], function ()
{
    Route::get('Dashboard',[AdminController::class,'dashboard']);
});

Route::get('Brands'   ,[AdminController::class,'brands']);
Route::get('Add_brands'   ,[AdminController::class,'Add_brands']);
Route::post('postbrand' ,[AdminController::class,'StoreBrand']);

Route::get('Category'  ,[AdminController::class,'Category']);
Route::post('StoreCategory' ,[AdminController::class,'StoreCategory']);
Route::post('EditCategory'  ,[AdminController::class,'EditCategory']);
Route::post('trashCategory'  ,[AdminController::class,'trashCategory']);


Route::get('Products',[AdminController::class,'Products']);

Route::post('StoreProduct' ,[AdminController::class,'StoreProduct'])->name('store.product');


Route::get('Advertisement',[AdminController::class,'Advertisement']);

Route::post('StoreAdvertisement',[AdminController::class,'StoreAdvertisement'])->name('store.advertisement');

Route::get('productByCategory/{id}',[AdminController::class,'ProductByCategory']);

Route::get('DetailProduct/{id}',[AdminController::class,'DetailProduct']);
Route::get('AddCarte',[AdminController::class,'AddCarte']);
Route::get('getCart',[AdminController::class,'getCart']);
Route::get('deleteCart',[AdminController::class,'deleteCart']);
Route::get('getFavorite',[AdminController::class,'getFavorite']);
Route::get('storeFavortie',[AdminController::class,'storeFavortie']);

Route::get('Favoirte',[AdminController::class,'Favorite']);
Route::get('removeFavorite',[AdminController::class,'removeFavorite']);


Route::get('checkout',[AdminController::class,'checkout']);

Route::post('Payement',[AdminController::class,'Payement']);

