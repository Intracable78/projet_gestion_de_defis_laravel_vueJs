<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\SessionHomeController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;
use Inertia\Inertia;
use Illuminate\Auth;
use App\Http\Controllers\ChallengeToUserController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');




// Routes for all sessions admin


Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::post('/sessionsList', [SessionHomeController::class, 'store'])->name('sessions.index');
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/sessionsList', [SessionHomeController::class, 'index']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/sessionsList/edit/{id}', [SessionHomeController::class, 'edit']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::patch('/sessionsList/edit/{id}', [SessionHomeController::class, 'update']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::delete('/sessionsList/delete/{id}', [SessionHomeController::class, 'destroy']);
});


// Routes for all users admin


Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/usersList', 'App\Http\Controllers\UserController@index')->name('users.index');
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::post('/usersList', [UserController::class, 'store']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/usersList/edit/{id}', [UserController::class, 'edit']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::patch('/usersList/edit/{id}', [UserController::class, 'update']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::delete('/usersList/delete/{id}', [UserController::class, 'destroy']);
});


//Routes for all challenges admin


Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::post('/challengesList', [ChallengeController::class, 'store']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList', [ChallengeController::class, 'index']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::delete('/challengesList/delete/{id}', [ChallengeController::class, 'destroy']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList/edit/{id}', [ChallengeController::class, 'edit']);
});
Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::patch('/challengesList/edit/{id}', [ChallengeController::class, 'update']);
});


//Routes for sessions

Route::get('/sessions', [\App\Http\Controllers\SessionUserController::class, 'index'])->middleware("auth")->name('sessionsUser.index');
Route::patch('/sessions/user/edit/{id}', [\App\Http\Controllers\SessionUserController::class, 'joinSession'])->middleware("auth");

//Routes for user sessions

Route::get('/sessions/user', [\App\Http\Controllers\SessionToUserController::class, 'index'])->middleware("auth")->name('sessionsToUser.index');

//Route for challenges

Route::get('session/user/challenges/', [ChallengeToUserController::class, 'index'])->middleware('auth')->name('challengesToUser.index');
Route::get('session/user/challenges/{id}', [ChallengeToUserController::class, 'show'])->middleware('auth');
Route::get('session/user/challenges/{id}/post', [ChallengeToUserController::class, 'create'])->middleware('auth');
Route::post('session/user/challenges/{id}/post/session/user/challenges', [ChallengeToUserController::class, 'store'])->middleware('auth');


// Route admin for validate challenge

Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList/validate', [\App\Http\Controllers\ChallengeValidateController::class, 'index'])->name('index.validate');
});

Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList/validate/user/{user}/session/{session}/challenge/{challenge}', [\App\Http\Controllers\ChallengeValidateController::class, 'show']);
});

Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList/validate/user/{user}/session/{session}/challenge/{challenge}/updateVerified', [\App\Http\Controllers\ChallengeValidateController::class, 'updateVerified']);
});

Route::middleware([IsAdmin::class, 'auth'])->group(function() {
    Route::get('/challengesList/validate/user/{user}/session/{session}/challenge/{challenge}/delete', [\App\Http\Controllers\ChallengeValidateController::class, 'deletePicture']);
});

//Route for ladder

Route::get('/leaderBoard', [\App\Http\Controllers\LeaderBoardController::class, 'index'])->name('leaderboard.index');
Route::get('/leaderBoard/{sessionId}', [\App\Http\Controllers\LeaderBoardController::class, 'show'])->name('leaderboard.show');

//Route for concept

Route::get('/concept', function(){
    return Inertia::render('Concept');
});
