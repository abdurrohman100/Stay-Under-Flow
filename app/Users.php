<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    
    protected $primarykey='user_id';

    public function answers()
    {
        return $this->hasMany('App\Answers', 'answer_user_id','user_id');
    }
    public function discuss()
    {
        return $this->hasMany('App\Discuss', 'discuss_user_id', 'user_id');
    }

    
}
