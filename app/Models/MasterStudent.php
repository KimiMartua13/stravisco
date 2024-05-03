<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class MasterStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'quotes',
        'photo',
        'class_id',
    ];

    public function enkripsiId(  ) 
    {
        return  Crypt::encrypt($this->id);
    }
}
