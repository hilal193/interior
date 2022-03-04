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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// route par page admin
Route::get('/dashboard/blog', function () {
    return view('admin.blog.index');
})->middleware(['auth'])->name('blog.index');

Route::get('/dashboard/contact', function () {
    return view('admin.contact.index');
})->middleware(['auth'])->name('contact.index');

Route::get('/dashboard/projets', function () {
    return view('admin.projets.index');
})->middleware(['auth'])->name('projets.index');

Route::get('/dashboard/projetshow', function () {
    return view('admin.projetshow.index');
})->middleware(['auth'])->name('projetshow.index');

Route::get('/dashboard/services', function () {
    return view('admin.services.index');
})->middleware(['auth'])->name('services.index');

require __DIR__.'/auth.php';


Route::get('/', [FrontController::class,"home"])->name('home');
Route::get('/pages/BlogHome', [FrontController::class,"blogHome"])->name('blogHome');
Route::get('/pages/Contact', [FrontController::class,"contact"])->name('contact');
Route::get('/pages/Elements', [FrontController::class,"elements"])->name('elements');
Route::get('/pages/{id}/ProjectDetails', [FrontController::class,"projetDetails"])->name('projectDetails');
Route::get('/pages/{id}/BlogDetails', [FrontController::class,"blogDetails"])->name('blogDetails');
Route::get('/pages/Projects', [FrontController::class,"projects"])->name('projects');
Route::get('/pages/Services', [FrontController::class,"services"])->name('services');

Route::get('/admin/dashboard', [FrontController::class,"admin"])->name('admin')->middleware(["auth"])->name("dashboard");



