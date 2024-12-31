<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\ToolItemController;
use App\Http\Controllers\AdministratorEvalueeController;
use App\Http\Controllers\FacultyEvalueeController;
use App\Http\Controllers\NonTeachingEvalueeController;
use App\Http\Controllers\SupervisorEvalueeController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::apiResource('tools', ToolsController::class)
    ->only(['index', 'show'])
    ->names([
        'index' => 'tools.index',
        'show' => 'tools.show',
    ]);

    Route::apiResource('/items', ToolItemController::class)
    ->except(['create', 'edit'])
    ->names([
        'index' => 'items.index',
        'show' => 'items.show',
        'store' => 'items.store',
        'update' => 'items.update',
        'destroy' => 'items.destroy',
    ]);

    Route::apiResource('/evaluees/administrators', AdministratorEvalueeController::class)
    ->names([
        'index' => 'administrator_evaluees.index',
        'show' => 'administrator_evaluees.show',
        'store' => 'administrator_evaluees.store',
        'update' => 'administrator_evaluees.update',
        'destroy' => 'administrator_evaluees.destroy',
    ]);
    Route::apiResource('/faculty_evaluees', FacultyEvalueeController::class);
    Route::apiResource('/non_teaching_evaluees', NonTeachingEvalueeController::class);
    Route::apiResource('/supervisor_evaluees', SupervisorEvalueeController::class);
});

require __DIR__.'/auth.php';
