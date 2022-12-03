<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\v1\PageController as Course;
use App\Http\Controllers\Skill\SkillController as Skill;
use App\Http\Controllers\Experience\ExperienceController as Experience;
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

Route::get('/',[PageController::class,'index'])->name('HomeCurriculum');

Route::resource('/curso', Course::class)->middleware('auth');

Route::resource('/skill', Skill::class)->middleware('auth');

Route::resource('/experience', Experience::class)->middleware('auth');

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
