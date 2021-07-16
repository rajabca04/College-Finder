<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|----------------------------------------------------------------------
| Web Routes;k
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CollegeController::class,"index"]);
Route::get('/insert', [CollegeController::class,"insert"]);
Route::post('/insert', [CollegeController::class,"insertCategory"])->name("insertCat");
Route::post('/insertCollege', [CollegeController::class,"insertCollege"])->name("InsertCollege");








