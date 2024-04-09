<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producmodel_first extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable =[
        'id',
        'name',
        'description',
        'price',
        
        'updated_at',
        'created_at'
    ];
}
