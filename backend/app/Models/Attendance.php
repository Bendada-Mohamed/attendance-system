<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'course_session_id',
        'student_id',
        'status'
    ];

    public function courseSession(){
        return $this->belongsTo(CourseSession::class, 'course_session_id');
    }

    public function student(){
        return $this->belongsTo(User::class, 'student_id');
    }
    
}
