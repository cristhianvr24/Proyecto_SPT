<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Preguntas</title>
	<link rel= "stylesheet" href= "./css/Style.css">
	<script src="./js/jquery-3.6.0.min.js"></script>

</head>
<body>
	<center><h2><div class= "a" id= "pregunta"></div></h2></center>
	<center><div class= "a" id= "respuestas">
	</div></center>
	<center><input type="button" class="a" value="Verifica tu respuesta" onclick="comprobar()"></center>

	<script>
      var preguntas = [
      "¿Cuántos elementos químicos hay?",
      "¿Cómo se les pone el nombre a los elementos?",
      "¿Qué representa la masa atómica en los elementos?",
      "¿Qué es un mol?",
      "Muestra la cantidad de elementos de la naturaleza...",
      "¿Dmitri Mandeléyev fue el creador de...?",
      "El número atómico es...",
      "El simbolo Hg representa al elemento...",
      "El simbolo Os representa al elemento...",
      "¿Cuál es el simbolo del Potasio?",
      "¿Cuál es el simbolo del Plomo?",
      "¿Cuál de las siguientes formulas del óxido esta mal?",
      "El nombre del compuesto Fe(OH)3 según la nomenclatura stock es",
      "Nombre del compuesto CO",
      "Los anhídridos son sustancias formadas por la reacción de: ",
      "¿Cuáles son los tres estados principales de la materia?",
      "El núcleo de un átomo tiene...",
      "¿Cómo se le conoce a la temperatura a la que una sustancia que pasa de líquido a gas?",
      "El simbolo Ag pertenece a:",
      "¿Cómo se llaman los átomos que poseen carga positiva?",
      "La química es la ciencia que estudia...",
      "La molécula es la agrupación de...",
      "¿Cual es el estado de la materia que llena el espacio en el que se encierra?",
      "La química orgánica se ocupa de estudiar los compuestos del...",
      "Los compuestos orgánicos que contienen solo hidrógeno y oxígeno son...",
      "Los metales son buenos conductores de...",
      "¿Cúal es el disolvente universal?",
      "¿Cúal es el simbolo del Plutonio?",
      "¿Quién afirmó, en 1803, que la materia está constituida por pequeños corpúsculos independientes e imposibles de dividir?",
      "¿Cómo se le llama a la cantidad de espacio que ocupa una sustancia o cosa?",
    ];
	var respuestas =[
  		["118", "108", "98", "128"],
  		["basado en un cientifico, un lugar o una propiedad", "basado en un animal, una ciudad o un objeto", "basado en un cientifico, un animal o un elemento", "basado en un lugar, un concepto mitologico o un cuento"],
  		["Peso relativo de los atomos", "Peso relativo de la valencia", "Peso relativo del elemento", "Peso relativo de las moleculas"],
  		["Cantidad de sustancias", "Cantidad de volumen", "Cantidad de masa", "Cantidad de atomos"],
  		["Tabla Periódica", "Tabla Simbolica", "Tabla de Elementos", "Tabla Quimica"],
  		["De la tabla periódica", "El mendelevio", "La formula empirica", "El alcohol etilico"],
 		["Número de protones que hay en el núcleo del átomo de un elemento", "Número de átomos que posee un elemento", "Número de neutrones que hay en el núcleo del átomo de un elemento", "Número de electrones que hay en el núcleo del átomo de un elemento"],
  		["Mercurio", "Magnesio", "Plomo", "Oro"],
 		["Osmio", "Oro", "Osnio", "Oxigeno"],
  		["k", "Po", "Pt", "P"],
  		["Pb", "Po", "P", "Pm"],
  		["NaO2", "CO2", "Ni2O3", "Al2O3"],
  		["Hidróxido de hierro (III)", "Hidróxido de hierro (II)", "Óxido de hierro (III)", "Hidróxido de hierro"],
  		["Monóxido de cabono", "Dióxido de carbono", "Monóxido de oxigeno", "óxido carbonoso"],
  		["El óxigeno con un elemento no métalico", "El óxigeno con un elemento metálico", "El sodio con el óxigeno", "El sodio con el hidrógeno"],
  		["Solido, liquido y gaseoso", "Solido, acuoso y aire", "Duro, viscoso y blando", "Solido, liquido y plasmatico"],
  		["Protones y neutrones", "Electrones, protones y neutrones", "Electrones y protones", "Electrones y neutrones"],
  		["Punto de ebullición", "Punto fusión", "Punto de congelación", "Punto de quiebre"],
  		["Plata", "Acero", "Argon", "Oro"],
  		["Cationes", "Protones", "Electrones", "Neutrones"], 
  		["La materia", "El cuerpo", "La naturaleza", "Las estrellas"],
  		["atomos", "electrones", "protones", "moles"],
  		["Gaseoso", "Liquido", "Solido", "Bajo cero"],
  		["Carbono", "Oxigeno", "Nitrogeno", "Hidrogeno"],
  		["hidrocarburos", "hidroxigenos", "oxidos de hidrogeno", "hidroxidos"],
  		["Electricidad", "Ondas", "Temperatura", "Calor"],
  		["Agua", "Gasolina", "Petroleo", "Aceite"],
  		["Pu", "Pb", "P", "Po"],
  		["John Dalton", "Dmitri Mendeléyev", "Mari Curie", "Antoine Lavoisier"],
  		["Volumen", "Masa", "Densidad", "Area"],
	];
	jugar();
	var indice_respuesta_correcta;
	
function jugar(){
	var indice_aleatorio = Math.floor(Math.random()*preguntas.length);
	var respuestas_posibles = respuestas[indice_aleatorio];
	var posiciones = [0, 1, 2, 3];
	var respuestas_reordenadas = [];
	
	var res_correc = false;
	for(i in respuestas_posibles){
	  var posicion_aleatoria = Math.floor(Math.random()*posiciones.length);
	  if(posicion_aleatoria==0 && res_correc == false){
	  	indice_respuesta_correcta = i;
	  	res_correc = true;
	  }
	  respuestas_reordenadas[i] = respuestas_posibles[posiciones[posicion_aleatoria]];
	  posiciones.splice(posicion_aleatoria, 1);
	}
	var txt_respuestas="";
	for (i in respuestas_reordenadas) {
  		txt_respuestas += '<input class= "a" type="radio" name="pp" value="'+i+'"><label>'+respuestas_reordenadas[i]+'</label>'; 

	}
	document.getElementById("respuestas").innerHTML = txt_respuestas;
	document.getElementById("pregunta").innerHTML = preguntas[indice_aleatorio];
	
}

function comprobar() {
	var respuesta = $("input[type=radio]:checked").val();
	if (respuesta==indice_respuesta_correcta) {
		alert("Correcto, pasemos a la siguiente pregunta");
		setTimeout(()=> location.href="./preguntas.php", 1000);
	}else{
		alert("Lo sentimos, te has equivocado");
		setTimeout(()=> location.href="./pantalla final.php", 1000);
	}

}
</script>
</body>
</html>
