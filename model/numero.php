<?php
include '../controller/numeroperfecto.php';

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegurarte de que los campos no estén vacíos
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $objNumero = new numeroperfecto();
        $numerosPerfectos = $objNumero->buscarNumerosPerfectosEnRango($numero1, $numero2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Natural Perfecto</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="numeros_perfectos">
    <?php
            // Verificar si el arreglo de números perfectos está vacío
            if (empty($numerosPerfectos)) {
                echo "<p>No se encontraron números perfectos en el rango proporcionado.</p>";
            } else {
                echo "<p>Números perfectos encontrados: " . implode(", ", $numerosPerfectos) ."</p>";
            }
        } else {
            echo "Por favor, completa ambos números.";
        }
    } else {
        echo "<p>Por favor, envía el formulario.</p>";
    }
    ?>
    <a href="http://localhost:1998/numero_perfecto">Volver al Inicio</a>
    </div>

</body>
</html>