<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected $primarykey='question_id';
    public function discuss()
    {
        return $this->belongsTo('App\Discuss', 'question_discuss_id', 'discuss_id');
    }
}
