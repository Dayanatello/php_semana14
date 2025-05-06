<?php
$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

$errores = [];

if ($nombre === '') {
    $errores[] = 'nombre';
}
if ($correo === '') {
    $errores[] = 'correo';
}
if ($mensaje === '') {
    $errores[] = 'mensaje';
}

if (!empty($errores)) {
    $query = http_build_query(['error' => implode(',', $errores)]);
    header("Location: index.php?$query");
    exit;
}



header("Location: index.php?exito=1");
exit;
