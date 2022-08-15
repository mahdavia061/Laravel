<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\aUsersController;
use \App\Http\Controllers\Admin\FilesController;
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
});




Route::group(['prefix'=>'admin','namespace'=>'Admin'],function () {

    //user routes
    Route::get('/users',[UsersController::class,'index'])->name('admin.users.list');//admin/users
    Route::get('/users/create',[UsersController::class,'create'])->name('admin.users.create');//admin/users/create
    Route::post('/users/create',[UsersController::class,'store'])->name('admin.users.store');
    Route::get('/users/delete/{user_id}',[UsersController::class, 'delete'])->name('admin.users.delete');
    Route::get('/users/edit/{user_id}',[UsersController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/edit/{user_id}',[UsersController::class, 'update'])->name('admin.users.update');


    //files routes
    Route::get('/files',[FilesController::class,'index'])->name('admin.files.list');
    Route::get('/files/create',[FilesController::class,'create'])->name('admin.files.create');
    Route::post('/files/create',[FilesController::class,'store'])->name('admin.files.store');
    Route::get('/files/edit{file_id}',[FilesController::class,'edit'])->name('admin.files.edit');
    Route::post('/files/edit{file_id}',[FilesController::class,'update'])->name('admin.files.update');

});






