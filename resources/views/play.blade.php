@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/simuladores.css">

      @guest

          <?= redirect('home'); ?>


      @else

      <form class="black-square" action="{{ $question->id+1 }}" method="POST" id="formJs">

        @csrf




        <!-- <iframe width="560" height="315" src="{{$question->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

        <img width="100%" src="{{$question->url}}" alt="">
        <h2 class="bg-question">{{$question->question}} </h2>
        @foreach($answers as $key => $answer)
        <button type="text" name="{{$answer->correct}}" class="button-register col-md-4" id="buttonAnswer"> {{$answer->answer}} </button>





@endforeach
    <p id="record">  {{ Auth::user()->record }} </p>
</form>

@endauth


@endsection




      <!-- </div>

        <h2> pregunta </h2>


        <button type="button" name="button">
          <p>respuesta</p>
        </button>


    </div>



  </body>
</html>
