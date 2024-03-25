<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\SocialiteController;
use App\Http\Controllers\AdminPanel\SchedulingPanelController;
use App\Http\Controllers\AdminPanel\JobsController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/job-search', [SchedulingPanelController::class, 'jobSearch'])->name('job.search');
    Route::post('/job-search-filter', [SchedulingPanelController::class, 'filterForJob'])->name('job.search.filter');
    Route::get('/in-progress-jobs', [SchedulingPanelController::class, 'InProgressJobs'])->name('in.progress.jobs');


    Route::get('/new-job-inquiries', [SchedulingPanelController::class, 'newJobInquiries'])->name('new.job.inquiries');
    Route::get('/request-job-authorization', [SchedulingPanelController::class, 'requestJobAuthorization'])->name('request.job.authorization');
    Route::get('/pending-request-job-authorization', [SchedulingPanelController::class, 'pendingRequestJobAuthorization'])->name('pending.request');
    Route::get('/authorization-profile-details', [SchedulingPanelController::class, 'authorizationProfileDetails'])->name('authorization.profile.details');

    Route::get('/call-details/{edit}/{key?}/{jobId?}',[SchedulingPanelController::class, 'callDetails'])->name('call.details');

    Route::get('/save/jobs',[JobsController::class, 'insertAllJobs']);

});

Route::get('/error', function () {
    abort(500);
});

// Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
