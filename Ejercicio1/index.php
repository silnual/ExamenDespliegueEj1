<?php
require_once 'src/Factorial.php';

use App\Factorial;

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;

    $factorial = new Factorial();

    if (isset($_POST['factorial'])) {
        $resultado = $factorial->calcularFactorial($a);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Factorial</h1>
        <form method="post">
            <input type="number" step="any" name="a" placeholder="Número (>= 0)" required>
            <div>
                <button type="submit" name="factorial">Calcular</button>
            </div>
        </form>
        <?php if ($resultado !== ''): ?>
            <div>
                <h2>Resultado: <?php echo $resultado; ?></h2>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
