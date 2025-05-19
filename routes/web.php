<?php

use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ProjectsController;
use App\Http\Controllers\Pages\SkillsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');
Route::get('/', HomeController::class)->name('home');
Route::get('/skills', SkillsController::class);
Route::get('/projects', ProjectsController::class);
Route::get('/contact', ContactController::class);
// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
