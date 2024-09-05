<?php
require_once '../src/Operaciones.php';

use App\Operaciones;

$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operacion = $_POST['operacion'];
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    try {
        $operaciones = new Operaciones();
        $resultado = $operaciones->realizarOperacion($operacion, $a, $b);
    } catch (Exception $e) {
        $resultado = $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>

<body>
    <h1>Calculadora PHP</h1>
    <hr>
    <h2>Curso de PHP: Entornos Virtuales y Funciones Avanzadas</h2>
    <hr>
    <h3>Operaciones</h3>
    <hr>
    <h4>Suma, Resta, Multiplicación y División</h4>
    <hr>
    <h5>Introduce dos números y selecciona la operación a realizar</h5>
    <form method="post">
        <label for="a">Número 1:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Número 2:</label>
        <input type="number" id="b" name="b" required>
        <br>
        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <?php if ($resultado !== ''): ?>
    <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>

</html>