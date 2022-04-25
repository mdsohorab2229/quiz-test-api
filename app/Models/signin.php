<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signin extends Model
{
    use HasFactory;
    protected $table='signin';
    protected $fillable=[
        'email','password'
    ];
}
