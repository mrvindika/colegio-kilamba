<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


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
    });

    /*---------------------------------------------------------------------------------
    |    user
    |---------------------------------------------------------------------------------*/

    Route::group(['prefix'=> 'settings'], function(){
        // USER
        Volt::route('users', 'user.index')->name('users.index'); 
        Volt::route('users/{user}', 'user.show')->name('users.show'); 
    });

});

/*------------------------------------------------------------------------------------
|     FALLBACK ROUTE 
|-------------------------------------------------------------------------------------*/
Route::fallback(function(){return back();});
