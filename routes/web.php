<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard_content', [
        "title" => "ppic",
        "name" => "Alam Kurnia Muslim",
        "email" => "alamkurniam@gmail.com"
        ]);
});

Route::get('/calendar', function () {
    return view('calendar_content', [
        "title" => "calendar",
        "name" => "Alam Kurnia Muslim",
        "email" => "alamkurniam@gmail.com"
        ]);
});

