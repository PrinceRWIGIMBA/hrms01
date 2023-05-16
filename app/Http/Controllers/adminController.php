<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Admin;

class adminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.index');
    }
}
