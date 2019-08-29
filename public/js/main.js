// #orgullo
if(!sessionStorage.puntaje) {
  sessionStorage.setItem('puntaje', 0);
}

window.onload = function(){
  // let puntaje = 0;
  let buttonsAnswer = document.querySelectorAll("#buttonAnswer");
  let form = document.getElementById("formJs");

  buttonsAnswer.forEach((buttonAnswer) => {
    buttonAnswer.addEventListener('click', (event) => {
      let name = buttonAnswer.getAttribute('name');
      let puntaje = 0;

      if (name == 1) {
        sessionStorage.puntaje++;
        console.log(sessionStorage.puntaje);
        // event.preventDefault();
        buttonAnswer.style.backgroundColor = "green";
      } else {
        buttonAnswer.style.backgroundColor = "red";
      }

    });
  });






  let gif1 = `<img src="/img/simu1.webp" alt="">`;
  let gif2 = `<img src="/img/simu2.webp" alt="">`;
  let gif3 = `<img src="/img/simu3.webp" alt="">`;

  let record = document.querySelector(".resultadoJuego");
  console.log(sessionStorage.puntaje)
  record.innerText = sessionStorage.puntaje;

  if(sessionStorage.puntaje < 1) {
    document.querySelector('#gif').innerHTML = gif1;
  } else if (sessionStorage.puntaje < 3) {
    document.querySelector('#gif').innerHTML = gif2;
  } else {
    document.querySelector('#gif').innerHTML = gif3;
  }



}





        //
        // let name = buttonAnswer.getAttribute('name');
        // let submit = buttonAnswer.getAttribute('type');
        //
        //
        //
        // buttonAnswer.onClick = function(){
        //   if (name == 1) {
        //   buttonAnswer.style.backgroundColor = red;
        //     }








        // PARA ESCRIBIR LETRA X LETRA
        //   let writing = str => {
        //   let arrFromStr = str.split('');
        //   let i = 0;
        //   let printStr = setInterval(function(){
        //     document.body.innerHTML += arrFromStr[i]; i++;
        //     if (i === arrFromStr.length) {
        //       clearInterval(printStr);
        //     }
        //   }, 400);
        // }
        // writing(`<p class"reglasText"> Los Simuladores están buscando un/a nuevo/a integrante para sumarse al equipo. Pero primero, necesitan saber cuánto los conocés.
        //
        //   Para comenzar con este interrogatorio, es escencial que te registres. Hacelo con precaución, dicen que detectan los mails que comienzan con "sdsdsd".
        //
        //   Una vez que ingreses, encontrarás una pregunta con 4 respuestas, pero ¡cuidado! sólo 1 es correcta.
        //
        //   Al finalizar el cuestionario, dependiendo de tus conocimientos quizás te rías, llores, asustes o quién sabe...</p>`)







          // let blackSquare = document.getElementById("blackSquare");
          // blackSquare.onmouseover = function(){
          //   console.log("hola");
          // }
          // blackSquare.onmouseout = function(){
          //   console.log("chau");
          // }
          //
          //
          //
          // let buttonValue =
