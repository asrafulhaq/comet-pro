<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\Admin\PermissionController;




route::get('admin-dashbaord', [ DashboardController::class,  'showAdminDashboard' ])-> name('admin.dashboard'); 
route::get('admin-login', [ LoginController::class,  'showLoginForm' ])-> name('admin.login');  


// Permission 
Route::get('permission', [ PermissionController::class, 'index' ]) -> name('admin.permission'); 


// role 
Route::get('role', [ RoleController::class, 'index' ]) -> name('admin.role'); 

// role 
Route::get('admin-create', [ AdminController::class, 'index' ]) -> name('admin.create');   