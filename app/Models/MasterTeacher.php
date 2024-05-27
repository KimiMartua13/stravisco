<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTeacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_guru',
        'teacher_name',
        'teacher_description',
    ];
}
