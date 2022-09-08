<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherDetailController;
use App\Http\Controllers\teacherScheduleController;

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
Route::get('/getteacherdetails', [teacherDetailController::class, 'getTeacherDetails']);
Route::post('/teacherdetails', [teacherDetailController::class, 'setTeacherDetails']);
Route::get('/delete', [teacherDetailController::class, 'deleteTeacherDetails']);
Route::get('/edit', [teacherDetailController::class, 'editTeacherDetails']);
Route::post('/editdetails', [teacherDetailController::class, 'setEditTeacherDetails']);
Route::post('/teacheschedule', [teacherScheduleController::class, 'setTeacherSchedule']);
Route::get('/view', [teacherScheduleController::class, 'getTeacherSchedule']);

