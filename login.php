<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/Style_2.css">
  

  <title>Login Study Periodic Table</title>
</head>

<body>
  <main>
    <div class="contenedor">
      <div class="caja_t">
        <div class="caja_t_e">
          <h3>¿Quieres aprender quimica?</h3>
          <p>podemos ayudarte</p>
          <button id="btn_estudiar">Estudiar</button>
        </div>
        <br>
        <div class="caja_t_j">
          <h3>¿no deseas estudiar?</h3>
          <p>¡Puedes divertirte!
          </p>
          <button id="btn_jugar">Jugar</button>
        </div>
      </div>
    </div>
    <!-- formulario-->
    <div class="contenedor_l">
      <form action="" class="formulario_e">
        <h2>Introduce tu nombre</h2>
        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Apellido"><br><br>
        <p>Ahora puedes estudiar</p>
        <input class="a" type="button" value="Pulsa aquí" onclick="location.href='./tema.php'">
      </form>
      <form action="" class="formulario_j">
        <h2>Introduce tu nombre</h2>
        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Apellido">
        <br><br>
        <p>Ahora puedes comenzar a divertirte</p>
        <input class="a" type="button" value="A divertirse" onclick="location.href='./tema_juego.php'">
      </form>
    </div>

  </main>
  <script type="text/javascript" src="./js/scrip.js"></script>


</body>

</html>