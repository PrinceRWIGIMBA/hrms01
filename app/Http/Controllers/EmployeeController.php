<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\employees;
use  App\Models\job_titles;
use  App\Models\department;
use Illuminate\Support\Facades\Crypt;

class EmployeeController extends Controller
{
    function getAllEmployee(){
        $employees=employees::with('getDepartmentName','getJobTitle')->get();
        //dd($employees);
        $jobs=job_titles::all();
        $depart=department::all();
        return view('employees',[
            'employee'=>$employees,
            'jobs'=>$jobs,
            'depart'=>$depart,
        ]);
    }
    function storeEmployee(Request $request){
        employees::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'date_of_birth'=>$request->date_of_birth,
            'job_title_id'=>$request->job_title,
            'department_id'=>$request->depart,
        ]);
        
        return redirect()->back();
    }
    function editEmployee($id){

            $employeeToEdit=employees::find($id);
            $jobs=job_titles::all();
            $depart=department::all();
            return view ('edit_employee',[
                'employeeToEdit'=>$employeeToEdit,
                'jobs'=>$jobs,
                'depart'=>$depart

            ]);
    }
    function UpdateEmployee(Request $request, $id){
        $employeeToUpdate=employees::find($id);
        
        $employeeToUpdate->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'date_of_birth'=>$request->date_of_birth,
            'job_title_id'=>$request->job_title,
            'department_id'=>$request->depart,
        ]);
            return redirect("/employees");
    }
    function deleteEmployee($id){
        $employeeToDelete=employees::find($id);
        $employeeToDelete->delete();
        return redirect()->back();

    }
//     function editEmployees($id){
//         return view('depart_edit',[
//             'employee'=>employees::findOrFail(Crypt::decrypt($id))
//         ]);
//     }
//     function updateEmployees(Request $request){
//         employees::where('id',Crypt::decrypt($request->job_title_id))->update([
//                 'employees_name'    =>  $request->employees_name,
//                 'description'       =>  $request->description,
//             ]);
//         return redirect('/depart_insert/');
//     }   
   
//     function DeleteEmployees($id){
//         // return JobTitle::all();
//         {
//             employees::findOrFail(Crypt::decrypt($id))->delete();
            
//             return redirect()->back();
        
//     }

   
// }
}
