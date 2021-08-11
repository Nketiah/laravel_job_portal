<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Jobs\JobController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Freelancer\FreelancerController;
use App\Http\Controllers\JobAppliedController;

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


Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::get('/', [PagesController::class, 'index']);
    Route::get('/test', [PagesController::class, 'test']);
    Route::post('/job/{id}/details',  [PagesController::class, 'show'])->name('job-details');
    Route::get('/job/{id}/{companyId}/apply',  [PagesController::class, 'jobApply'])->name('apply-for-job');
    Route::get('/job/search',  [PagesController::class, 'jobSearch'])->name('search-job');

    //Route::get('/forgot-password', [PagesController::class, 'forgotPassword']);
    //Route::get('/reset-password', [PagesController::class, 'resetPassword']);


    Route::group(['middleware' => 'auth', 'verified'], function(){

        Route::get('/dashboard',  [PagesController::class, 'loadPages'])->middleware(['auth', 'verified']);
        Route::group(['middleware' => 'role:freelancer'], function(){
           Route::get("/dashboard/freelancer", [FreelancerController::class, 'index'])->name('freelancer');
           Route::post("/dashboard/freelancer/apply-job", [JobAppliedController::class, 'store'])->name('save-job-applied');

        });
    
        Route::group(['middleware' => 'role:company' ], function(){
            Route::get("/dashboard/company", [CompanyController::class, 'index'])->name('company');
            Route::get('/dashboard/company/post-job',  [JobController::class, 'index'])->name('create-new-job');
            Route::post('/dashboard/company/save-job',  [JobController::class, 'store'])->name('save-new-job');
        });
        
    
        Route::group(['middleware' => 'role:admin'], function(){
            //Route::get("/dashboard/company", [CompanyController::class, 'index'])->name('company');
        });

    });

  
});
