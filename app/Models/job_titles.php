<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\JobController;

class job_titles extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'job_title_name',
        'description',
    ];
}
