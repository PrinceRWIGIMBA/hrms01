<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\employees;
use  App\Models\job_titles;
use  App\Models\department;
use  App\Models\employees_attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function getAllEmployee(){
 $Withstipend = employees::with('getDepartmentName','getJobTitle')->get();
        //dd($employees);
        $jobs=job_titles::all();
        $depart=department::all();
        $employee=employees::all();
    
        return view('employees',[
            'employee'=>$employee,
            'jobs'=>$jobs,
            'depart'=>$depart,
            'withstipend'=>$Withstipend,
        
        ]);
    }
    function storeEmployee(Request $request){
        employees::create([
            'firstname'=>$request->firstname,
            'laststname'=>$request->lastname,
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
            return redirect("/attendance");
    }
    function deleteEmployee($id){
        $employeeToDelete=employees::find($id);
        $employeeToDelete->delete();
        return redirect()->back();

    }   

    // function prasent($id)
    // {
    //     $theAttendedEmployeeData = employees::where('id',$id)->first();
    //    // dd($theAttendedEmployeeData);
    //    employees_attendance::create([
    //     'attendance_date'=>Carbon::now(),
    //     'amount'=>5000,
    //     'is_paid'=>0,
    //     'employee_id'=>$theAttendedEmployeeData->id,
    //    ]);
    //     $findEmployee = employees::where('id',$id)->update([
    //         'stipend'=>DB::raw('stipend + 1')
    //     ]);



    //     return redirect('/attendance');

    // }

//     function absent($id)
//     {
//         $findEmployee = employees::where('id',$id)->update([
//             'stipend'=>DB::raw('stipend + 0')
//         ]);

//         return redirect('/attendance');

// //     }
//     function payment($id){
//     //             $pay=employees::find($id);
//     //             $pay->update([
//     //                 'stipend'=>'0',
//     //             ]);
//     //     $pay->save();
        
//         $findEmployee = employees::where('id',$id)->update([
//             'stipend'=>'0'
//         ]);
//                 return redirect('/attendance');
//             }
// //     function editEmployees($id){
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
