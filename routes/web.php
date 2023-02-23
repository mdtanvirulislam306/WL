<?php
// use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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




Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/', function () {return view('Pages.dashboard');})->name('home');
    // IT Service Route
    Route::get('/it-service',[ServiceController::class,'index'])->name('it-sevice');
    Route::get('/it-service/create',[ServiceController::class,'create'])->name('it-sevice.create');
    Route::get('/it-service/edit/{$id}',function () {return view('Pages.IT Service.itServiceEdit');})->name('it-sevice.edit');
    Route::get('/it-service/edit/{$id}',function () {return view('Pages.IT Service.itServiceEdit');})->name('it-sevice.edit');
    // Profile Route
    Route::get('/profile/edit',[UserController::class,'profileEdit'])->name('profile.edit');
    Route::post('/profile/update',[UserController::class,'profileUpdate'])->name('profile.update');
    // Role And Permissions
    Route::get('/role',[RoleController::class,'index'])->name('role'); 
});
