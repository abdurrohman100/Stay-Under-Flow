<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{   
    protected $primarykey='discuss_id';
    public function questions()
    {
        return $this->hasOne('App\Questions', 'question_disscus_id', 'discuss_id');
    }
    public function answers()
    {
        return $this->hasMany('App\Answers', 'answer_discuss_id', 'disscus_id');
    }
    public function users()
    {
        return $this->belongsTo('App\Users', 'discuss_user_id', 'user_id');
    }
    public function topics()
    {
        return $this->belongsTo('App\Topics', 'discuss_topic_id', 'topic_id');
    }
}
