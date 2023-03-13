<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/',[App\Http\Controllers\UserController::class,'getAllData'] );
Route::get('/depart_insert', [DepartController::class,'getAllDepart']);
Route::post('/depart/save',[DepartController::class,'saveDepart']);
Route::post('/depart/update', [DepartController::class,'updateDepart']);
Route::get('/Depart/edit/{id}', [DepartController::class,'editDepart']);
Route::delete('/depart/delete/{id}', [DepartController::class,'DeleteDepart']);



//Route::get('/job_title', [ JobController::class,'getAllJobTitle']);
Route::get('/job_insert', [JobController::class,'getAllJobTitle']);
Route::post('/JobTitle/save',[JobController::class,'saveJobTitle']);
Route::post('/jobTitle/update', [JobController::class,'UpdateJobTitle']);
Route::get('/JobTitle/edit/{id}', [JobController::class,'editJobTitle']);
Route::delete('/JobTitle/delete/{id}', [JobController::class,'DeleteJobTitle']);


Route::get('/employees', [EmployeeController::class,'getAllEmployee']);
Route::post('/employees/save',[EmployeeController::class,'storeEmployee']);
Route::post('/employees/update/{id}', [EmployeeController::class,'UpdateEmployee']);
Route::get('/employees/edit/{id}', [EmployeeController::class,'editEmployee']);
Route::get('/employees/delete/{id}', [EmployeeController::class,'deleteEmployee']);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/user', function () {
    return view('user');
});Route::get('/table', function () {
    return view('table');
});Route::get('/typograph', function () {
    return view('typograph');
});Route::get('/icons', function () {
    return view('icons');
});Route::get('/upgrade', function () {
    return view('upgrade');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/notifications', function () {
    return view('notifications');
});