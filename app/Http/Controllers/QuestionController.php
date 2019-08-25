<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class QuestionController extends Controller {

    public function quiz($id){

      $question = Question::find($id);

      $answers = Answer::where('question_id', $id)->get();

        $vac = compact ("question", "answers");

       return view("play", $vac);

   }       

    public function next($id){

       $question = Question::find($id);

          if ($question != null){
             $answers = Answer::where('question_id', $id)->get();

               $vac = compact ("question", "answers", "id");

              return view("play", $vac);
            } else {
              return view ("home");
            }
          }

// ASI MOSTRAMOS EL RECORD DE TABLA USER {{ Auth::user()->record }}


//
// public function correctAnswer(){
//   if($_POST){
//   $dato = $_POST;
//
//   $puntaje=0;
//   foreach ($dato as $key => $value) {
//   dd($dato);
//     if ($key == 1) {
//       $puntaje= $puntaje +1;
//     }
// dd($puntaje);
// }
//   }
// }
}







    //        foreach ($questions as $question) {
    //
    //]

     // $image = Question:: where

    //  //
    //
    //
    // }
    // dd($idQuestion =0);


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
