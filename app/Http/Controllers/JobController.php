<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\job_titles;
use Illuminate\Support\Facades\Crypt;
class JobController extends Controller
{
    function getAllJobTitle(){
        // return JobTitle::all();
        return view('job_insert',[
            'job'=>job_titles::all()
        ]);
    }
    function saveJobTitle(Request $request){
     
        job_titles::create($request->all());
        // job_titles::create([
        //     'job_titles_name'=>$request->depart,
        //     'description'=>$request->description,
        // ]);
        
        return redirect()->back();
        }
 
    function editJobTitle($id){
        return view('job_edit',[
            'job'=>job_titles::findOrFail(Crypt::decrypt($id))
        ]);
    }
    function updateJobTitle(Request $request){
        job_titles::where('id',Crypt::decrypt($request->job_title_id))->update([
                'job_title_name'    =>  $request->job_title_name,
                'description'       =>  $request->description,
            ]);
        return redirect('/job_insert/');
    }   
   
    function DeleteJobTitle($id){
        // return JobTitle::all();
        {
            job_titles::findOrFail(Crypt::decrypt($id))->delete();
            
            return redirect()->back();
        
    }

   
}
}
