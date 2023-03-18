<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employees;

class employee_pay extends Model
{
    use HasFactory;
    protected $fillable=[
        'period_paid_for',
        'amount_paid',
        'employee_id'
    ];


    public function getEmployeeNames(){
        return $this->belongsTo(employees::class,'employee_id','id');
    }
}
