<?php

namespace App\Models;
use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employees;

class employees_attendance extends Model
{
    use HasFactory;
 
    protected $fillable=[
        'attendance_date',
        'amount',
        'is_paid',
        'employee_id',
    ];

    // public function getDepartmentName(){
    //     return $this->belongsTo(department::class,'department_id','id');
    // }
    // public function getJobTitle(){
    //     return $this->belongsTo(job_titles::class,'job_title_id','id');
    // }
    public function getEmployeeNames(){
        return $this->belongsTo(employees::class,'employee_id','id');
    }
}
