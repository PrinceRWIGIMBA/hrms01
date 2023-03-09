<?php

namespace App\Models;
use App\Http\Controllers\DepartController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $fillable=[
        'department_name',
        'description',
    ];
}
