<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\opopController;

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

Route::get('/', function () {
    return view('admin');
});

Route::middleware(['login'])->group(function () {

    Route::get('register', function () {
        return view('register');
    });
    Route::post('register', [RegisterController::class, "register"]);

    Route::get('login', function () {
        return view('login');
    })->name('login');
    Route::post('login', [LoginController::class, "login"]);
});

Route::middleware(['jwt'])->group(function () {
    Route::get('logout', [LoginController::class, "logout"]);
});
Route::post('createInstitute',[adminController::class, 'createInstitute']);

Route::post('createDirection',[adminController::class, 'createDirection']);

Route::post('deleteDirection',[adminController::class, 'deleteDirection']);

Route::post('createOPOP',[adminController::class, 'OPOP']);
Route::post('createDirector',[adminController::class, 'createDirector']);

Route::get('admin',[adminController::class, 'getData']);

Route::get('test', [adminController::class,'getList']);

Route::get('opop',[opopController::class, 'getData']);

Route::post('createGroup',[opopController::class, 'createGroup']);
Route::post('giveCourse',[opopController::class, 'giveCourse']);
Route::post('studentToGroup',[opopController::class, 'studentToGroup']);
Route::post('createPract',[opopController::class, 'createPract']);