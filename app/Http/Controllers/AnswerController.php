<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{


  public function correctAnswer(){
    $dato = $_POST;
    $puntaje=0;
    foreach ($dato as $key => $value) {
      // code...
      if ($key == 1) {
        $puntaje= $puntaje +1;
      }
    } return $puntaje;
    dd($puntaje);


    }



  }






      //
