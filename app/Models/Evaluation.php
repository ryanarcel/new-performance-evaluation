<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = 'evaluations';

    public function tool(){
        return $this->belongsTo('App\Models\Tool','tool_id');
    }

    public function evaluee(){
        return $this->belongsTo('App\Models\Evaluee', 'evaluee_id');
    }

    public function students(){
        return $this->hasMany("App\Models\Student");
    }

    public function scores(){
        return $this->hasMany('App\Models\Score');
    }

    public function totalscores(){
        return $this->hasMany("App\Models\Total");
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
