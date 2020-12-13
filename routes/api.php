<?php

use App\Http\Controllers\KanbanCardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanColumnController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('columns', KanbanColumnController::class)->only([
    'index', 'show'
]);

Route::resource('columns.card', KanbanCardController::class)->only([
    'update', 'destroy'
]);
