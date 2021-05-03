<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;


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

Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/test',[DashboardController::class,'test']);    

// Route:resource('/restaurant',[RestaurantController::class]);

Route::get('/demo', [DemoController::class, 'index']);
// Route::get('/test', [DemoController::class, 'test']);

Route::get('/restaurants',[RestaurantController::class,'index']);

Route::get('/restaurant/create',[RestaurantController::class,'create']);
Route::post('/restaurant/create',[RestaurantController::class,'store']);

Route::get('/restaurant/show',[RestaurantController::class,'show']);

Route::get('/restaurant/edit/{id}',[RestaurantController::class,'edit']);
Route::put('/restaurant/{id}',[RestaurantController::class,'update']);

Route::delete('/restaurant/{id}',[RestaurantController::class,'delete']);

Route::resource('menu',MenuController::class);

// Route::resource('posts', 'PostsController');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('food',FoodController::class);


Route::get('/',[DashboardController::class,'home']);
Route::get('/{id}',[DashboardController::class,'home']);


// Route::get('/{name}', function ($name){
//         return "My name is : and id is : ".$id;
//     });