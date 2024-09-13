<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ResumeController::class, 'index']);
Route::get('/web', [ResumeController::class, 'index']);

Route::prefix("/admin")->group(function () {
    Route::resource("/about", \App\Http\Controllers\admin\AboutController::class);
    Route::resource("/experience", \App\Http\Controllers\admin\ExperienceController::class);
    Route::resource("/education", \App\Http\Controllers\admin\EducationController::class);
    Route::resource("/skills", \App\Http\Controllers\admin\SkillsController::class);


});
