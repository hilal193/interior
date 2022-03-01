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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [FrontController::class,"home"])->name('home');
Route::get('/pages/BlogHome', [FrontController::class,"blogHome"])->name('blogHome');
Route::get('/pages/Contact', [FrontController::class,"contact"])->name('contact');
Route::get('/pages/Elements', [FrontController::class,"elements"])->name('elements');
Route::get('/pages/ProjectDetails', [FrontController::class,"projectDetails"])->name('projectDetails');
Route::get('/pages/Projects', [FrontController::class,"projects"])->name('projects');
Route::get('/pages/Services', [FrontController::class,"services"])->name('services');