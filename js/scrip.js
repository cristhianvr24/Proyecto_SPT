document.getElementById("btn_jugar").addEventListener("click", jugar);
document.getElementById("btn_estudiar").addEventListener("click", estudiar);
window.addEventListener("resize", anchopagina);


var contenedor__l= document.querySelector(".contenedor_l");
var formulario__e =document.querySelector(".formulario_e");
var formulario__j= document.querySelector(".formulario_j");
var caja__t_e= document.querySelector(".caja_t_e");
var caja__t_j= document.querySelector(".caja_t_j");


function anchopagina(){
	if (window.innerWidth > 850) {
		caja__t_e.style.display= "block";
		caja__t_j.style.display= "block";
	}else{
		caja__t_j.style.display= "block";
		caja__t_j.style.opacity= "1";
		caja__t_e.style.display= "none";
		formulario__e.style.display= "block";
		formulario__j.style.display= "none";
		contenedor__l.style.left= "0px";
	}
}
anchopagina();
function estudiar(){
	if(window.innerWidth > 850){
		formulario__j.style.display= "none";
		contenedor__l.style.left= "275px";
		formulario__e.style.display= "block";
		caja__t_j.style.opacity= "1";
		caja__t_e.style.opacity= "0";
	}else{
		formulario__j.style.display= "none";
		contenedor__l.style.left= "0px";
		formulario__e.style.display= "block";
		caja__t_j.style.display= "block";
		caja__t_e.style.display= "none";
	}
}
function jugar(){
	if(window.innerWidth > 850){
		formulario__j.style.display= "block";
		contenedor__l.style.left = "665px";
		formulario__e.style.display= "none";
		caja__t_j.style.opacity= "0";
		caja__t_e.style.opacity= "1";
	}else{
		formulario__j.style.display= "block";
		contenedor__l.style.left = "0px";
		formulario__e.style.display= "none";
		caja__t_j.style.display= "none";
		caja__t_e.style.opacity= "1";
		caja__t_e.style.display= "block"
	}
}

