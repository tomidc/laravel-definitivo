<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'image', 'url'
    ];

    public function answer(){
      return $this->hasMany("App\Answer", "question_id");

    }


}
