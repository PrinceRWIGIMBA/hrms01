<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\user;
use  App\Models\department;
use  App\Models\salary;
use  App\Models\JobTitle;

class UserController extends Controller
{
    function getAllData(){
        return view('welcome',[
            'users'=>user::all(),
            'user_count'=>user::count(),
            'depart'=>department::count(),
            'employee'=>salary::count(),
//            'job'=>job_titles::count()
        ]);
    }
}
