<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_tittle',
        'vacancy',
        'experience',
        'deadline',
        'job_type',
        'job_summary',
        'role_responsibilities',
        'minimum_qualification',
        'additional_qualification',
        'compensation_other_benefit',
    ];

    public function application()
    {
        return $this->hasMany(JobApplication::class, 'jobId', 'id');
    }
}
