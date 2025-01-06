<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth')->group(function () {
    Route::prefix('/task')->group(function (){
        Route::post('/add', [TaskController::class, 'add'])->name('task.add');
        Route::prefix('/{taskid}')->group(function(){
            Route::post('/edit', [TaskController::class, 'edit'])->name('profile.edit');
            Route::patch('/update', [TaskController::class, 'update'])->name('profile.update');
            Route::delete('/task', [TaskController::class, 'destroy'])->name('profile.destroy');
        });
    });
});

require __DIR__.'/auth.php';
