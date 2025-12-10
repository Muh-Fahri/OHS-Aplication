<?php

use App\Http\Controllers\User\AssetManagementConroller;
use App\Http\Controllers\User\CorrectiveActionController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DelegationController;
use App\Http\Controllers\User\HazardController;
use App\Http\Controllers\User\IncidentInvestigationController;
use App\Http\Controllers\User\IncidentNotificationController;
use App\Http\Controllers\User\LicenseToOperateController;
use App\Http\Controllers\User\ListController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\User\WorkplaceControlController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'Dashboard'])->name('user.dashboard');

    // incident notification
    Route::get('/user/incident_notification', [IncidentNotificationController::class,'IncidentNotification'])->name('user.incidentNotification');

    // incident investigation
    Route::get('/user/incident_investigation', [IncidentInvestigationController::class, 'incidentInvestigation'])->name('user.incidentInvestigation');

    // hazard
    Route::get('/user/hazard', [HazardController::class, 'hazard'])->name('user.hazard');

    // corective action
    Route::get('/user/corective_action', [CorrectiveActionController::class, 'correctiveAction'])->name('user.correctiveAction');

    // work place control
    Route::get('/user/work_place_control', [WorkplaceControlController::class,'workPlaceControl'])->name('user.workPlaceControl');

    // License to operate (LTO)
    Route::get('/user/license_to_operate', [LicenseToOperateController::class, 'licenseToOperate'])->name('user.licenseToOperate');

    // Asset management
    Route::get('/user/asset_management', [AssetManagementConroller::class, 'assetManagement'])->name('user.assetManagement');

    // delegation
    Route::get('/user/delegation',[DelegationController::class, 'delegation'])->name('user.delegation');

    // badge list
    Route::get('/user/badge/list',[ListController::class,'list'])->name('user.list');

    // badge request
    Route::get('/user/badge/request', [RequestController::class, 'request'])->name('user.request');
});
