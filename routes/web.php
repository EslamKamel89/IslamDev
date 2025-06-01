<?php

use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\MessageCreateController;
use App\Http\Controllers\Pages\ProjectsController;
use App\Http\Controllers\Pages\ResumeController;
use App\Http\Controllers\Pages\SkillsController;
use App\Mail\MessageRecieved;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');
Route::get('/', HomeController::class)->name('home');
Route::get('/skills', SkillsController::class)->name('skills.index');
Route::get('/projects', ProjectsController::class)->name('projects.index');
Route::get('/contact', ContactController::class)->name('contact');
Route::post('/contact', MessageCreateController::class)->name('contact.store');
Route::get('/resume', ResumeController::class)->name('resume');
// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/test', function () {
    echo (new MessageRecieved('Eslam kamel', 'some text'))->render();
});
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
