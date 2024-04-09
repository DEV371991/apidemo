<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_registerdmodel extends Model
{
    use HasFactory;
     protected $table='user_registerd';
    protected $fillable =[
        'id',
        'email',
        'password',
        'name',
        'contact'
        
    ];
}
