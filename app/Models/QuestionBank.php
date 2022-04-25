<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    use HasFactory;
    protected $table='question_banks';
    protected $fillable=[
        'subject_id','question','option_a','option_b','option_c','option_d','right_ans'
    ];
}
