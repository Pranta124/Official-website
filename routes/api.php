<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\JobApplicationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Send Message - (insert_contact)
Route::post('send-message',[ContactController::class,'insertAPI']);
Route::get('products',[ProductController::class,'indexAPI']);
Route::get('career',[CareerController::class,'indexAPI']);
Route::get('career/{id}',[CareerController::class,'viewJobAPI']);
Route::post('apply-job',[JobApplicationController::class,'insertAPI']);
Route::get('employees',[EmployerController::class,'indexAPI']);
