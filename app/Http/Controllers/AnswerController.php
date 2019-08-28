<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\User;

class AnswerController extends Controller
{


  public function correctAnswer(){
    $dato = $_POST;
    $puntaje = 0;
 
    foreach ($dato as $key => $value) {
      if ($key == 1) {
        $puntaje= $puntaje +1;
        
    } 
     
      
      



    }
   
    $vac = compact ("puntaje");
    return view("resultado", $vac);

  }



}


      //
