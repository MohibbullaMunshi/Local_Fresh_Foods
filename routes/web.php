<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\GoogleMap;

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

Route::get('/about',function(){
    return Inertia::render('frontend/about/About');
});
Route::get('/ray',function(){
    return Inertia::render('Ray');
});
Route::get('/anh',function(){
    return Inertia::render('Anh');
});
Route::get('/soapy',function(){
    return Inertia::render('Soapy');
});
Route::get('/cluster-google-map',function(){
    return Inertia::render('Cluster');
});
Route::resource('/crud', CrudController::class);
Route::resource('/map', GoogleMap::class);
