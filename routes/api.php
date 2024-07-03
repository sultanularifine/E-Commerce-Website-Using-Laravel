<?php

use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\QuotationController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware(['auth:api'])->group(function () {
    Route::post('invoices/{id}', [QuotationController::class, 'store'])->name('invoice.store');
    Route::put('task/status', [TaskController::class, 'statusChange']);
    Route::post('subjects', [SubjectController::class, 'getList'])->name('subject.getList');
// });
