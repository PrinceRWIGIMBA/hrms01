<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\user;
use  App\Models\department;
use  App\Models\employees;
use  App\Models\job_titles;

class UserController extends Controller
{
    function getAllData(){
        return view('welcome',[
            'users'=>user::all(),
            'user_count'=>user::count(),
            'depart'=>department::count(),
            'employee'=>employees::count(),
           'job'=>job_titles::count()
        ]);
    }
}
