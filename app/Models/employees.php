<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EmployeeController;
use  App\Models\job_titles;
use  App\Models\department;

class employees extends Model
{
    use HasFactory;

    protected $fillable=[
        'firstname',
        'laststname',
        'date_of_birth',
        'job_title_id',
        'department_id',
    ];
   

    public function getDepartmentName(){
        return $this->belongsTo(department::class,'department_id','id');
    }
    public function getJobTitle(){
        return $this->belongsTo(job_titles::class,'job_title_id','id');
    }
    public function getEmployee(){
        return $this->belongsTo(employees::class,'employee_id','id');
    }
}
