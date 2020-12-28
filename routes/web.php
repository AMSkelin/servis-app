<?php


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('countries', CountryController::class);
Route::resource('bills', BillController::class);
Route::resource('device_models', Device_modelController::class);
Route::resource('device_types', Device_typeController::class);
Route::resource('devices', DeviceController::class);
Route::resource('parts', PartController::class);
Route::resource('repairs', RepairController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('users', UserController::class);