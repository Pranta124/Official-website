<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BrandController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'login');

// Route::get('dashboard', function () {
//     $unreadMessageCount = Contact::where('status', '0')->count();
//      return view('admin.index');
//  })->middleware(['auth'])->name('dashboard');
 Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth'])->name('dashboard');

// -----------Products------------------------------------------------------------------------------
 Route::get('products',[ProductController::class,'index'])->middleware(['auth'])->name('products');
 Route::get('add-product',[ProductController::class,'add'])->middleware(['auth'])->name('add-product');
 Route::post('insert-product',[ProductController::class,'insert'])->middleware(['auth'])->name('insert-product');
 Route::get('edit-prod/{id}',[ProductController::class,'edit'])->middleware(['auth'])->name('edit-prod');
 Route::post('update_prod/{id}',[ProductController::class,'update'])->middleware(['auth'])->name('update_prod');
 Route::get('delete_prod/{id}',[ProductController::class,'destroy'])->middleware(['auth'])->name('delete_prod');
// -----------------------------------End PRoducts-----------------------------------------------------------
//------------------------------------Client---------------------------------------------------------------
Route::get('clients',[ClientController::class,'index'])->middleware(['auth'])->name('client');
Route::get('add-client',[ClientController::class,'add'])->middleware(['auth'])->name('add-client');
Route::post('insert-client',[ClientController::class,'insert'])->middleware(['auth'])->name('insert-client');
Route::get('edit-client/{id}',[ClientController::class,'edit'])->middleware(['auth'])->name('edit-client');
Route::post('update_client/{id}',[ClientController::class,'update'])->middleware(['auth'])->name('update_client');
Route::get('delete_client/{id}',[ClientController::class,'destroy'])->middleware(['auth'])->name('delete_client');
// -------------------------------------End Client-----------------------------------------------------------------
// -----------------------------Employee--------------------------------------------------------------------------
Route::get('employees',[EmployerController::class,'index'])->middleware(['auth'])->name('employee');
Route::get('add-member',[EmployerController::class,'add'])->middleware(['auth'])->name('add-member');
Route::post('insert-member',[EmployerController::class,'insert'])->middleware(['auth'])->name('insert-member');
Route::get('edit-member/{id}',[EmployerController::class,'edit'])->middleware(['auth'])->name('edit-member');
Route::post('update_member/{id}',[EmployerController::class,'update'])->middleware(['auth'])->name('update_member');
Route::get('delete_member/{id}',[EmployerController::class,'destroy'])->middleware(['auth'])->name('delete_member');
// ----------------------------------End Employeee-------------------------------------------------------------------
// ---------------------------------------Start Contact--------------------------------------------------------------
Route::get('contact',[ContactController::class,'index'])->middleware(['auth'])->name('contact');
Route::get('add_contact',[ContactController::class,'add'])->middleware(['auth'])->name('add_contact');
Route::post('insert_contact',[ContactController::class,'insert'])->middleware(['auth'])->name('insert_contact');
Route::get('view_contact/{id}',[ContactController::class,'view'])->middleware(['auth'])->name('view_contact');
Route::get('delete_contact/{id}',[ContactController::class,'destroy'])->middleware(['auth'])->name('delete_contact');
// -----------------------------------------End Contact--------------------------------------------------------------
//-------------------------------------------Start Career------------------------------------------------------------
Route::get('career',[CareerController::class,'index'])->middleware(['auth'])->name('career');
Route::get('add_career',[CareerController::class,'add'])->middleware(['auth'])->name('add_career');
Route::post('insert_career',[CareerController::class,'insert'])->middleware(['auth'])->name('insert_career');
Route::get('edit_career/{id}',[CareerController::class,'edit'])->middleware(['auth'])->name('edit_career');
Route::post('update_career/{id}',[CareerController::class,'update'])->middleware(['auth'])->name('update_career');
Route::get('delete_career/{id}',[CareerController::class,'destroy'])->middleware(['auth'])->name('delete_member');
Route::get('view_job/{id}',[CareerController::class,'viewJob'])->middleware(['auth'])->name('view_job');
// --------------------------------------------End Career------------------------------------------------------------
// ---------------------------------------------Start Brand----------------------------------------------------------
Route::get('brand',[BrandController::class,'index'])->middleware(['auth'])->name('brand');
Route::get('add_brand',[BrandController::class,'add'])->middleware(['auth'])->name('add_brand');
Route::post('insert_brand',[BrandController::class,'insert'])->middleware(['auth'])->name('insert_brand');
Route::get('edit_brand/{id}',[BrandController::class,'edit'])->middleware(['auth'])->name('edit_brand');
Route::post('update_brand/{id}',[BrandController::class,'update'])->middleware(['auth'])->name('update_brand');
Route::get('delete_brand/{id}',[BrandController::class,'destroy'])->middleware(['auth'])->name('update_brand');
require __DIR__.'/auth.php';
