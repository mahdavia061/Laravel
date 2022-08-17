<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\aUsersController;
use \App\Http\Controllers\Admin\FilesController;
use \App\Http\Controllers\Admin\PlansController;
use \App\Http\Controllers\Admin\PackagesController;
use \App\Http\Controllers\Admin\PaymentsController;

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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    //user routes
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.list');//admin/users
    Route::get('/users/create', [UsersController::class, 'create'])->name('admin.users.create');//admin/users/create
    Route::post('/users/create', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('/users/delete/{user_id}', [UsersController::class, 'delete'])->name('admin.users.delete');
    Route::get('/users/edit/{user_id}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/edit/{user_id}', [UsersController::class, 'update'])->name('admin.users.update');


    //files routes
    Route::get('/files', [FilesController::class, 'index'])->name('admin.files.list');
    Route::get('/files/create', [FilesController::class, 'create'])->name('admin.files.create');
    Route::post('/files/create', [FilesController::class, 'store'])->name('admin.files.store');
    Route::get('/files/edit{file_id}', [FilesController::class, 'edit'])->name('admin.files.edit');
    Route::post('/files/edit{file_id}', [FilesController::class, 'update'])->name('admin.files.update');


    //plans routes
    Route::get('/plans', [PlansController::class, 'index'])->name('admin.plans.list');
    Route::get('/plans/create', [PlansController::class, 'create'])->name('admin.plans.create');
    Route::post('/plans/create', [PlansController::class, 'store'])->name('admin.plans.store');
    Route::get('/plans/edit{plan_id}', [PlansController::class, 'edit'])->name('admin.plans.edit');
    Route::post('/plans/edit{plan_id}', [PlansController::class, 'update'])->name('admin.plans.update');
    Route::get('/plans/delete{plan_id}', [PlansController::class, 'delete'])->name('admin.plans.delete');


    //packages routes
    Route::get('/packages', [PackagesController::class, 'index'])->name('admin.packages.list');
    Route::get('/packages/create', [PackagesController::class, 'create'])->name('admin.packages.create');
    Route::post('/packages/create', [PackagesController::class, 'store'])->name('admin.packages.store');
    Route::get('/packages/edit{package_id}', [PackagesController::class, 'edit'])->name('admin.packages.edit');
    Route::post('/packages/edit{package_id}', [PackagesController::class, 'update'])->name('admin.packages.update');
    Route::get('/packages/delete{package_id}', [PackagesController::class, 'delete'])->name('admin.packages.delete');
    Route::get('/packages/sync_files{package_id}', [PackagesController::class, 'syncfiles'])->name('admin.packages.sync_files');
    Route::post('/packages/sync_files{package_id}', [PackagesController::class, 'updatesyncfiles'])->name('admin.packages.sync_files');

    //payments routes
    Route::get('/payments', [PaymentsController::class, 'index'])->name('admin.payments.list');
    Route::get('/payments/create', [PaymentsController::class, 'create'])->name('admin.payments.create');
    Route::post('/payments/create', [PaymentsController::class, 'store'])->name('admin.payments.store');
    Route::get('/payments/edit{payment_id}', [PaymentsController::class, 'edit'])->name('admin.payments.edit');
    Route::post('/payments/edit{payment_id}', [PaymentsController::class, 'update'])->name('admin.payments.update');
    Route::get('/payments/delete{payment_id}', [PaymentsController::class, 'delete'])->name('admin.payments.delete');
    Route::get('/payments/sync_files{payment_id}', [PaymentsController::class, 'syncfiles'])->name('admin.payments.sync_files');
    Route::post('/payments/sync_files{payment_id}', [PaymentsController::class, 'updatesyncfiles'])->name('admin.payments.sync_files');


});






