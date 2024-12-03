<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('podcasts', [PodcastController::class, 'index']); // Fetch all podcasts
    Route::get('latest-podcasts', [PodcastController::class, 'latestPodcasts']); // Fetch all podcasts
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/articles', [GeneralController::class, 'articles'])->name('articles');
    Route::get('blogs', [GeneralController::class, 'blogs'])->name('blogs');
    Route::get('vacancy', [OpportunityController::class, 'vacancy'])->name('vacancy');
    Route::get('scholarship', [OpportunityController::class, 'scholarship'])->name('scholarship');
    Route::get('biography', [GeneralController::class, 'biography'])->name('biography');
    Route::post('contacts', [ContactController::class, 'contact']); 
    Route::post('partnership', [ContactController::class, 'partnership']); 


