<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    use HasFactory;
    protected $table='student_information';
    protected $fillable=[
        'name','phone','email','password'
    ];

    public function startquiz(){
        return $this->hasMany(Startquiz::class);
    }
}
