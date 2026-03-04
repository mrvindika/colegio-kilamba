<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

/*-----------------------------------------------------------------------------------
|     GUEST ROUTES 
|-----------------------------------------------------------------------------------*/
Route::get('/', [AuthenticatedSessionController::class, 'welcome'])->name('welcome')->middleware('guest');

/*------------------------------------------------------------------------------------
|     AUTHENTICATED ROUTES 
|-------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'verified'])->group(function () {
    
    /*---------------------------------------------------------------------------------
    |    HOME
    |---------------------------------------------------------------------------------*/
    Route::group(['prefix'=> 'home'], function(){
        // DASHBOARD
        Route::get('dashboard', [AuthenticatedSessionController::class, 'dashboard'])->name('dashboard');
        
        // USER PROFILE
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});

/*------------------------------------------------------------------------------------
|     FALLBACK ROUTE 
|-------------------------------------------------------------------------------------*/
Route::fallback(function(){return back();});
