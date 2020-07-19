<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    //
    protected $primarykey='topic_id';
    public function discuss()
    {
        return $this->hasMany('App\Discuss', 'discuss_topic_id', 'topic_id');
    }
}
