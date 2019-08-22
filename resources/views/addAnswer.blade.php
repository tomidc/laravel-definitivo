
@extends ("layouts.master")

@section("contenido")

<form class="" action="/addAnswer" method="post">
  {{csrf_field()}}

  <div class="">
    <label for=""> Respuesta 1 </label>
    <input type="" name="answer" value="">
  </div>

  <div class="">
    <label for=""> Si es correcta escribí un 1. Caso contrario, un 0 </label>
    <input type="" name="correct" value="">
  </div>

  <div class="">
    <label for=""> Esta respuesta corresponde a la pregunta Numero: </label>
    <input type="" name="correct" value="{{question_id}}">
  </div>

  <div class="">
    <input type="submit" name="" value="AGREGAR RESPUESTA">
  </div>



</form>

@endsection