<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    //
    protected $primarykey='answer_id';
    
    
    public function discuss()
    {
        return $this->belongsTo('App\Discuss', 'answer_discuss_id', 'discuss_id');
    }
    public function users()
    {
        return $this->belongsTo('App\Users', 'answer_user_id', 'user_id');
    }
}
