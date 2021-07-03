var numero_pagina;
var paginas = [];
var bandera = true;

document.querySelector('#button').addEventListener('click', function (){
	const min = 1;
	const max = 10;

	var random = Math.floor((Math.random() * (max - min +1)) + min);
		for (var i = 0; i <10; i++) {
		 	if (random == paginas[i]) {
		 		bandera== false;
		 	}
		 } 
});
if (bandera == true) {
	numero_pagina = random;
	paginas.push(numero_pagina);
	window.location="./pagina" + numero_pagina;
}