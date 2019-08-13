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


//     COMENTO PARA NO ROMPER LO QUE TENIAMOS

//       public function addQuestion(Request $req){
//
//       $newQuestion = new Question();
//
//       $newQuestion->question = $req['question'];
//       $newQuestion->image = $req['image'];
//       $newQuestion->url = $req['url'];
//
//       $newQuestion->save();
//
//       return redirect('/addAnswer');
//     }
//
//
//
//     public function addAnswer(Request $req){
//
// //      $reglas = [
// //        'correct' => "min:0|max:1"
// //      ];
// //      $mensajes = [
// //        'correct' => "El número tiene que ser 0 ó 1"
// //      ];
// //      $this->validate($req,$reglas,$mensajes);
//
//       $newAnswer = new Answer();
//
//       $newAnswer->answer = $req['answer'];
//       $newAnswer->correct = $req['correct'];
//       $newAnswer->question_id = belongsTo('App\Question','question_id');
//       //CLARAMENTE NO PUEDO SOBREESCIRBIR UNA FK
//
//       $newAnswer->save();
//
//       return redirect('/addQuestion');
//     }
}
