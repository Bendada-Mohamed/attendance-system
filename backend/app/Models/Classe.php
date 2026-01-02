<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name',
        'filiere',
        'niveau'
    ];

    public function courseSession(){
        return $this->hasMany(CourseSession::class, 'class_id');
    }
}
