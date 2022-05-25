<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\Admin\PermissionController;




route::get('admin-dashboard', [ DashboardController::class,  'showAdminDashboard' ])-> name('admin.dashboard'); 
route::get('admin-login', [ LoginController::class,  'showLoginForm' ])-> name('admin.login');  


// Permission 
Route::get('permission', [ PermissionController::class, 'index' ]) -> name('admin.permission');  
Route::post('permission', [ PermissionController::class, 'store' ]) -> name('admin.permission.store'); 
Route::get('permission-delete/{id}', [ PermissionController::class, 'destroy' ]) -> name('admin.permission.destroy'); 
Route::get('permission-edit/{id}', [ PermissionController::class, 'edit' ]) -> name('admin.permission.edit'); 
Route::post('permission-update/{id}', [ PermissionController::class, 'update' ]) -> name('admin.permission.update'); 


// role 
Route::get('role', [ RoleController::class, 'index' ]) -> name('admin.role'); 
Route::post('role', [ RoleController::class, 'store' ]) -> name('admin.role.store'); 

// role 
Route::get('admin-create', [ AdminController::class, 'index' ]) -> name('admin.create');   