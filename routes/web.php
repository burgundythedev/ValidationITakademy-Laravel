<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DraftmanController;

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

Route::get('/', [ViewController::class, 'home']);
Route::get('/home', [ViewController::class, 'home']);
    Route::get('/character', [ViewController::class, 'character']);
        Route::get('/addCharacter', [ViewController::class, 'addCharacter']);
        Route::get('/characterDetails/{id}', [ViewController::class, 'characterDetails']);
        Route::get('/updateCharacter/{id}',[ViewController::class, 'updateCharacter']);
        Route::post('/updateCharacter',[CharacterController::class, 'update']);
        Route::post('/deleteCharacter',[CharacterController::class, 'delete']);
    Route::get('/draftsman', [ViewController::class, 'draftsman']);