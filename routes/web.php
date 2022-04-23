<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);



// Route::get('/', function () {
//     return view('pages.index');
//     //return '<h1> welcome to the Meowshas Goodies <h1>';
// });
// Route::get('/about', function () {
//     return view('pages.about');
//     return '<h1> welcome to the abouts page<h1>';
// });
// Route::get('/services', function () {
//     return view('pages.services');
//     return '<h1> welcome to the services page<h1>';
// });
