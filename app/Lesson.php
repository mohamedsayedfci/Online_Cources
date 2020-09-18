<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'thumbnail', 'course_id',  'description'
    ];

    protected $table ='lessons';

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

  
}
