<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\Admin\PermissionController;






Route::group( [ 'middleware' => 'admin.redirect'  ], function(){

    route::get('admin-login', [ LoginController::class,  'showLoginForm' ])-> name('admin.login');  
    route::post('admin-login', [ LoginController::class,  'adminLoginSystem' ])-> name('admin.login.system');  
      
});


Route::group([ 'middleware' => 'admin' ], function(){

    // Logout pocess
    route::get('admin-logout', [ LoginController::class,  'adminLogoutSystem' ])-> name('admin.logout.system');
    

    // Dashboard
    route::get('admin-dashboard', [ DashboardController::class,  'showAdminDashboard' ])-> name('admin.dashboard'); 
    
    // Permission 
    Route::get('permission', [ PermissionController::class, 'index' ]) -> name('admin.permission');  
    Route::post('permission', [ PermissionController::class, 'store' ]) -> name('admin.permission.store'); 
    Route::get('permission-delete/{id}', [ PermissionController::class, 'destroy' ]) -> name('admin.permission.destroy'); 
    Route::get('permission-edit/{id}', [ PermissionController::class, 'edit' ]) -> name('admin.permission.edit'); 
    Route::post('permission-update/{id}', [ PermissionController::class, 'update' ]) -> name('admin.permission.update'); 


    // role 
    Route::get('role', [ RoleController::class, 'index' ]) -> name('admin.role'); 
    Route::post('role', [ RoleController::class, 'store' ]) -> name('admin.role.store'); 
    Route::get('role-delete/{id}', [ RoleController::class, 'destroy' ]) -> name('admin.role.destroy');  
    Route::get('role-edit/{id}', [ RoleController::class, 'edit' ]) -> name('admin.role.edit');  
    Route::post('role-update/{id}', [ RoleController::class, 'update' ]) -> name('admin.role.update');   

    // Admin 
    Route::get('admin-all', [ AdminController::class, 'index' ]) -> name('admin.all');   
    Route::post('admin-store', [ AdminController::class, 'store' ]) -> name('admin.store');   
    Route::get('admin-delete/{id}', [ AdminController::class, 'destroy' ]) -> name('admin.destroy');    
    Route::get('admin-edit/{id}', [ AdminController::class, 'edit' ]) -> name('admin.edit');    
    Route::post('admin-update/{id}', [ AdminController::class, 'update' ]) -> name('admin.update'); 
    
    
    // user profile routes
    Route::get('admin-profile', [ ProfileController::class, 'showAdminProfilePage' ]) -> name('admin.profile'); 
    Route::post('admin-profile-photo-uplaod/{id}', [ ProfileController::class, 'uplaodProfilePhoto' ]) -> name('admin.profile.photo.upload'); 
    Route::post('admin-password-change/{id}', [ ProfileController::class, 'passwordChange' ]) -> name('admin.password.change'); 
    


    
});

