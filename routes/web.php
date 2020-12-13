<?php

use App\Http\Controllers\DumpController;
use App\Http\Controllers\KanbanCardController;
use App\Http\Controllers\KanbanColumnController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {
    return view('home');
})->name('home');

Route::get('/dump', [DumpController::class, 'index']);
Route::get('/card/create', [KanbanCardController::class, 'create']);
Route::post('/card', [KanbanCardController::class, 'store']);
Route::get('/column/create', [KanbanColumnController::class, 'create']);
Route::post('/column', [KanbanColumnController::class, 'store']);
