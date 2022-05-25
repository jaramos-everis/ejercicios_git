// window.alert("Hello world!");

document.getElementById("block-jmtheme-menuprincipal").style.display = "none";

document.getElementById("icon-modal").addEventListener("click", function () {
  let x = document.getElementById("block-jmtheme-menuprincipal");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.className = '';
  } else {
    x.style.display = "block";
    x.className = 'modal-menu';
  }
});

document.getElementById("cerrar").addEventListener("click", function () {
  document.getElementById("block-jmtheme-menuprincipal").style.display = "none";

});

//Recorremos los elementos y cerramos ventana modal con display none.
let elementos = document.getElementsByClassName('menu-modal');
for (let el of elementos) {
  el.addEventListener("click", function () {
    document.getElementById("block-jmtheme-menuprincipal").style.display = "none";

  });
}






// function displayDate() {
//   document.getElementById("block-jmtheme-menuprincipal").innerHTML = Date();
// }

// function hidden() {

// }
