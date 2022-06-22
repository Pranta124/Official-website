<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';
    protected $fillable = [
        'name',
        'designation',
        'department',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'linkedin'
    ];
}
