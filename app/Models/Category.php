<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = 'item_parts';

    public function tool(){
        return $this->belongsTo("App\Models\Tool", "tool_id");
    }

    public function items(){
        return $this->hasMany("App\Models\ToolItem");
    }
    public function scores(){
        return $this->hasMany("App\Models\ToolItem");
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
