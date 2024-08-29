<?php
include 'OperacionesCadena.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadena = $_POST['cadena'];

    $operacion = new OperacionesCadena($cadena);

    echo "<h1>Resultados:</h1>";
    echo "<p>Cadena Invertida: " . $operacion->invertir() . "</p>";
    echo "<p>Cadena en Mayúsculas: " . $operacion->mayuscula() . "</p>";
    echo "<p>Cadena en Minúsculas: " . $operacion->minuscula() . "</p>";
}
?>
