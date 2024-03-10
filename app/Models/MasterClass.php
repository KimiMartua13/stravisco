<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];
    
    public $incrementing = false;
    protected $keyType = 'string';
}
