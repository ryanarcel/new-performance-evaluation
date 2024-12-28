<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function evaluation(){
        return $this->belongsTo("App\Models\Evaluation", "evaluation_id");
    }

    public function comment(){
        return $this->hasOne("App\Models\Comment", "student_id");
    }   

    public function scores(){
        return $this->hasMany("App\Models\Score", "student_id");
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
