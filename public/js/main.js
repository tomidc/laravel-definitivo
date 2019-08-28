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

  let gif1 = `<img src="/img/gif1.gif" alt="">`;
  let gif2 = `<img src="/img/gif2.gif" alt="">`;
  let gif3 = `<img src="/img/gif3.gif" alt="">`;

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
