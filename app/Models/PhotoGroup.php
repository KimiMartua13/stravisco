<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'photo',
        'type_foto',
    ];
}
