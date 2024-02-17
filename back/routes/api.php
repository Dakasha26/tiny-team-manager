<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthorizationController;


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

// Authorization and Registration
Route::post('/registration', [\App\Http\Controllers\AuthorizationController::class, 'registration']);
Route::post('/authorization', [\App\Http\Controllers\AuthorizationController::class, 'authorization']);

// WorkTables
Route::get('/work/getTable/{tableName}', [\App\Http\Controllers\WorkTablesController::class, 'getTable']);
Route::post('/work/addInTable', [\App\Http\Controllers\WorkTablesController::class, 'addRecordInTable']);
Route::put('/work/editRecordInTable', [\App\Http\Controllers\WorkTablesController::class, 'editRecordInTable']);
Route::delete('/work/delRecordInTable', [\App\Http\Controllers\WorkTablesController::class, 'delRecordInTable']);

// Reports on /works
Route::get('/work/getReportBestMembers', [\App\Http\Controllers\WorkReportsController::class, 'getReportBestMembers']);
Route::get('/work/getReportGroupActivity', [\App\Http\Controllers\WorkReportsController::class, 'getReportGroupActivity']);




