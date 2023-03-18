<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AttendanceController;

class attendances extends Model
{
    use HasFactory;
    protected $fillable=[
        'status',
        'stipend',
        'employee_id',
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
