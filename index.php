<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Perfectos</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <section>
     <div class="title">
     <h1>Números Perfectos</h1>
     <div class="parrafo">
     <p>Esta es una página web para comprobar si los números son naturales perfectos</p>
      <p>Digite el rango de números que desea compronar si son  o no números taturales perfectos</p>
     </div>
     </div>

     <div class="form">
     <form action="./model/numero.php" method="post">
        <label for="numero1">Número 1</label>
        <input type="number" name="numero1" id="numero1">
        <label for="numero2">Número 2</label>
        <input type="number" name="numero2" id="numero2">
        <button type="submit">Enviar</button>
   </form>
     </div>
    </section>
</body>
</html>