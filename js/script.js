document.getElementById("cambioid").innerHTML = "Bienvenidos";

var getdata = function validar() {

var usuario = document.getElementById("usuario").value;

var password = document.getElementById("password").value;

expresion = /\w+@\w+\.+[a-z]/;

console.log(usuario+""+password);

if(usuario === "" || password === "") {

	alert("todos los campos son necesarios")
	return false;
}
else if(!expresion.test(usuario)) {

	alert("el correo no es correcto")
	return false;
}
}
document.getElementById("dulce2").onmouseover = function() {mouseOver()};
document.getElementById("dulce2").onmouseout = function() {mouseOut()};
var imagen = document.getElementsByTagName("img");
function mouseOver() {
  imagen[1].attributes[0].value = "img/dul6.jpg";
  imagen[1].attributes[1].value = "50%";
}

function mouseOut() {
  imagen[1].attributes[0].value = "img/dul5.png";
  imagen[1].attributes[1].value = "50%";
}
document.getElementById("alerta").onclick = function cambiartexto(){

  alert ("Debes registrarte");
}
