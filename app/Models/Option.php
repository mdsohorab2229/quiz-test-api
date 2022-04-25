<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table='options';
    protected $fillable=[
        'option_a','option_b','option_c','option_d','question_bank_id'
    ];
}
