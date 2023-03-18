<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\UserController::class,'getAllData'] )->middleware('auth');
Route::get('/depart_insert', [DepartController::class,'getAllDepart'])->middleware('auth');
Route::post('/depart/save',[DepartController::class,'saveDepart'])->middleware('auth');
Route::post('/depart/update', [DepartController::class,'updateDepart'])->middleware('auth');
Route::get('/Depart/edit/{id}', [DepartController::class,'editDepart'])->middleware('auth');
Route::delete('/depart/delete/{id}', [DepartController::class,'DeleteDepart'])->middleware('auth');



//Route::get('/job_title', [ JobController::class,'getAllJobTitle']);
Route::get('/job_insert', [JobController::class,'getAllJobTitle'])->middleware('auth');
Route::post('/JobTitle/save',[JobController::class,'saveJobTitle'])->middleware('auth');
Route::post('/jobTitle/update', [JobController::class,'UpdateJobTitle'])->middleware('auth');
Route::get('/JobTitle/edit/{id}', [JobController::class,'editJobTitle'])->middleware('auth');
Route::delete('/JobTitle/delete/{id}', [JobController::class,'DeleteJobTitle'])->middleware('auth');


Route::get('/employees', [EmployeeController::class,'getAllEmployee'])->middleware('auth');
Route::post('/employees/save',[EmployeeController::class,'storeEmployee'])->middleware('auth');
Route::post('/employees/update/{id}', [EmployeeController::class,'UpdateEmployee'])->middleware('auth');
Route::get('/employees/edit/{id}', [EmployeeController::class,'editEmployee'])->middleware('auth');
Route::get('/employees/delete/{id}', [EmployeeController::class,'deleteEmployee'])->middleware('auth');



Route::get('/attendance', [AttendanceController::class,'getAllAttendance'])->middleware('auth');
Route::post('/attendance/save',[AttendanceController::class,'storeAttendance'])->middleware('auth');
Route::get('/attendance/prasent/{id}', [AttendanceController::class,'prasent'])->middleware('auth');
Route::get('/attendance/absent/{id}', [AttendanceController::class,'absent'])->middleware('auth');
Route::get('/attendances/payment/{id}', [AttendanceController::class,'payEmployee'])->middleware('auth');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function () {
    return redirect('/');
});
//Route::get('/table', function () {
//     return view('table');
// });Route::get('/typograph', function () {
//     return view('typograph');
// });Route::get('/icons', function () {
//     return view('icons');
// });Route::get('/upgrade', function () {
//     return view('upgrade');
// });
// Route::get('/maps', function () {
//     return view('maps');
// });
// Route::get('/notifications', function () {
//     return view('notifications');
// });

