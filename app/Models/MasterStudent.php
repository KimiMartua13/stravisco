<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'quotes',
        'photo',
        'class_id',
    ];
}
