<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizCreate extends Model
{
    use HasFactory;
    protected $table='quiz_creates';
    protected $fillable=[
        'question_bank_id','quiz_list_id'
    ];

    public function questionBank(){
        return $this->belongsTo(QuestionBank::class);
    }
    public function quizList()
    {
        return $this->belongsTo(QuizList::class);
    }
    public function startquiz()
    {
        return $this->hasMany(StartQuiz::class);
    }
}
