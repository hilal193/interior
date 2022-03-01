<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('home');
// });


// pages
Route::get('/', [FrontController::class,"Home"])->name('home');
Route::get('/pages/blogHome', [FrontController::class,"blogHome"])->name('blogHome');
Route::get('/pages/contact', [FrontController::class,"contact"])->name('contact');
Route::get('/pages/elements', [FrontController::class,"elements"])->name('elements');
Route::get('/pages/projectdetails', [FrontController::class,"projectDetails"])->name('projectDetails');
Route::get('/pages/projects', [FrontController::class,"projects"])->name('projects');
Route::get('/pages/services', [FrontController::class,"services"])->name('services');

