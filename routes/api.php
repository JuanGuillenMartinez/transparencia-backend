<?php

use App\Http\Controllers\OfficeController;
use App\Http\Controllers\SubdepartmentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/offices', OfficeController::class);
Route::apiResource('/subdepartments', SubdepartmentController::class);
Route::get('/subdepartments/{id}/groups', [SubdepartmentController::class, 'folderGroups']);