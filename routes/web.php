<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\JobTitleController;
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
Route::post('/jobTitle/update', [DepartController::class,'updateJobTitle']);
Route::get('/Depart/edit/{id}', [DepartController::class,'editJobTitle']);
Route::delete('/depart/delete/{id}', [DepartController::class,'DeleteDepart']);
Route::get('/job_title', [ JobTitleController::class,'getAllJobTitle']);

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