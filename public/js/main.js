
window.onload=function(){


        let buttonsAnswer = document.querySelectorAll("#buttonAnswer");

        let form = document.getElementById("formJs");

        buttonsAnswer.forEach((buttonAnswer) => {
  buttonAnswer.addEventListener('click', () => {
          let name = buttonAnswer.getAttribute('name');
      if (name == 1) {
        buttonAnswer.style.backgroundColor = "green";
      } else {
        buttonAnswer.style.backgroundColor = "red";
      }


  });
});

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
