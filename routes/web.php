<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController; 




route::get('admin-dashbaord', [ DashboardController::class,  'showAdminDashboard' ])-> name('admin.dashboard'); 
route::get('admin-login', [ LoginController::class,  'showLoginForm' ])-> name('admin.login'); 