<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobId',
        'name',
        'experience',
        'email',
        'phone',
        'portfolio',
        'linkedin',
        'resume'
    ];
}
