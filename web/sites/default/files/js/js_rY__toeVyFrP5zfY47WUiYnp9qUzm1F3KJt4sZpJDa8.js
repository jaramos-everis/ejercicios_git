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

// function displayDate() {
//   document.getElementById("block-jmtheme-menuprincipal").innerHTML = Date();
// }

// function hidden() {

// }
;
