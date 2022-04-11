<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tui4Controller;
use App\Http\Controllers\LikeController;

Route::get('/', [Tui4Controller::class, 'index']);
Route::post('/add', [Tui4Controller::class, 'create']);


Route::post('/edit', [Tui4Controller::class, 'update']);



Route::post('/delete', [Tui4Controller::class, 'remove']);


Route::get('/find', [Tui4Controller::class, 'find']);
Route::post('/find', [Tui4Controller::class, 'search']);



Route::prefix('book')->group(function () {//以下を追記
    Route::get('/', [LikeController::class, 'index']);
    Route::get('/add', [LikeController::class, 'add']);
    Route::post('/add', [LikeController::class, 'create']);
});


Route::get('/relation', [LikeController::class, 'relate']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
