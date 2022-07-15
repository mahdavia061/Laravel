<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\aUsersController;
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
    return view('wellcome');
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function () {
    Route::get('/users',[UsersController::class,'index'])->name('admin.users.list');//admin/users
    Route::get('/users/create',[UsersController::class,'create'])->name('admin.users.create');//admin/users/create
    Route::post('/users/create',[UsersController::class,'store'])->name('admin.users.store');
});

