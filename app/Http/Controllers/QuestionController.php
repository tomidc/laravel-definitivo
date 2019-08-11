<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    //

    public function quiz(){
      $questions = Question:: all();


      return view('/play')-> with ('questions', $questions);

    }
}
