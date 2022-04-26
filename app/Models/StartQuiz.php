<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartQuiz extends Model
{
    use HasFactory;
    protected $table='start_quizzes';
    protected $fillable=[
        'student_id','quiz_create_id','wrong_ans','right_ans'
    ];

    public function studentInfo()
    {
        return $this->belongsTo(StudentInformation::class);
    }

    public function quizCreate(){
        return $this->belongsTo(QuizCreate::class);
    }
}
