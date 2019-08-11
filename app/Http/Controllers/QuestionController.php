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
    foreach ($questions as $question) {
      $idQuestion= $question->id;
    }
     $answers = Answer::where('question_id', $idQuestion)->get();

      return view('/play')-> with ('questions', $questions)-> with ('answers', $answers);

    }
}
