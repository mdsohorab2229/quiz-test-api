<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizList extends Model
{
    use HasFactory;
    protected $table='quiz_lists';
    protected $fillable=[
        'title','subject_id','per_question_mark','total_mark','total_quetion'
    ];
}
