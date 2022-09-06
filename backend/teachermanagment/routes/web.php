<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherDetailController;
use App\Http\Controllers\teacherScheduleController;

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
     return view('welcome');
 });
// Route::get('/', [teacherDetailController::class, 'getTeacherDetails']);
// Route::get('/addteacher', function () {
//     return view('teacherform');
// });
// Route::any('/teacherdetails', [teacherDetailController::class, 'setTeacherDetails']);
// Route::get('/editteacher/{id}', [teacherDetailController::class, 'editTeacherDetails']);
// Route::post('/editteacherdetails', [teacherDetailController::class, 'setEditTeacherDetails']);
// Route::get('/deleteteacher/{id}', [teacherDetailController::class, 'deleteTeacherDetails']);
// Route::get('/addschedule', [teacherScheduleController::class, 'loadTeachersNames']); 
    
 

