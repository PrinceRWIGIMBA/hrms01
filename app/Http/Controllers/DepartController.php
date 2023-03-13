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
    function editDepart($id){
        return view('depart_edit',[
            'depart'=>department::findOrFail(Crypt::decrypt($id))
        ]);
    }
    function updateDepart(Request $request){
        department::where('id',Crypt::decrypt($request->job_title_id))->update([
                'department_name'    =>  $request->department_name,
                'description'       =>  $request->description,
            ]);
        return redirect('/depart_insert/');
    }   
   
    function DeleteDepart($id){
        // return JobTitle::all();
        {
            department::findOrFail(Crypt::decrypt($id))->delete();
            
            return redirect()->back();
        
    }

   
}
}
