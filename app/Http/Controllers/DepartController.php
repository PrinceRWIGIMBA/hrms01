<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\department;
use Illuminate\Support\Facades\Crypt;
class DepartController extends Controller
{
    function saveDepart(Request $request){
     
        department::create($request->all());
        // department::create([
        //     'department_name'=>$request->depart,
        //     'description'=>$request->description,
        // ]);
        
        return redirect()->back();
        }
    function getAllDepart(){
        // return JobTitle::all();
        return view('depart_insert',[
            'department'=>department::all()
        ]);
    }
    function DeleteDepart($id){
        // return JobTitle::all();
        {
            department::findOrFail(Crypt::decrypt($id))->delete();
            
            return redirect()->back();
        
    }

   
}
}
