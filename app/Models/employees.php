<?php

namespace App\Models;
use App\Http\Controllers\EmployeeController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;
use App\Models\job_titles;
class employees extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
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
}
