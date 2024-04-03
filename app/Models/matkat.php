<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkat extends Model
{
    use HasFactory;

    protected $table = "matkat";

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone' ,
        'visitors',
        'email',    
    ];
}
