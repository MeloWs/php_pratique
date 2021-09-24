<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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
