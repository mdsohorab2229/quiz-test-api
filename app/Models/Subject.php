<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];

    public function questionBank()
    {
        return $this->hasMany(QuestionBank::class);
    }

    public function quizList(){
        return $this->hasMany(QuizList::class);
    }
}
