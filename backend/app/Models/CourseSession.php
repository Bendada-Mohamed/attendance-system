<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    protected $fillable = [
        'class_id',
        'formateur_id',
        'start_time',
        'end_time',
        'date',
        'module'
    ];

    protected $casts = [
        'start_time' => 'dateTime:H:i',
        'end_time' => 'dateTime:H:i',
        'date' => 'dateTime'
    ];

    public function class(){
        return $this->belongsToMany(Classe::class, 'class_id');
    }

    public function formateur(){
        return $this->belongsToMany(User::class, 'formateur_id');
    }

    public function attendance(){
        return $this->hasMany(Attendance::class, 'course_session_id');
    }
}
