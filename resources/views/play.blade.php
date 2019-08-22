<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <div class="">
        @foreach($questions as $question)

        <!-- <iframe width="560" height="315" src="{{$question->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

        <img src="{{$question->url}}" alt="">



         <!-- @endforeach -->



      <!-- </div>
       @foreach($questions as $question) -->
        <h2> {{$question->question}} </h2>
        <!-- @endforeach -->

        <!-- @foreach ($answers as $answer) -->

        <button type="button" name="button">
          <p>{{$answer->answer}}</p>
        </button>
      @endforeach

    </div>



  </body>
</html>
