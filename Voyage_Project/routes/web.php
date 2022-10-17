<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\VoyageController;

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

Route::get('/', [StaticController::class, 'home'])->name('home');
Route::get('admin/voyages', [VoyageController::class, 'index'])->name('admin');
Route::get('admin/voyages/create', [VoyageController::class, 'create'])->name('voyage.add');
Route::post('admin/voyages/store', [VoyageController::class, 'store'])->name('voyage.store');
/*Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::get('post/{id}/delete', [PostController::class, 'destroy'])->name('post.delete');
*/
Route::get('trips', [StaticController::class, 'trips'])->name('trips');
Route::get('trip/{id}', [StaticController::class, 'trip'])->name('trip');
Route::get(
    'about_us',
    function () {
        return view('about_us', ['name' => 'About Us']);
    }
)->name('about_us');
Route::get(
    'contact',
    function () {
        return view('contact', ['name' => 'Contact']);
    }
)->name('contact');
