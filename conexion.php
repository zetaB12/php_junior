<?php

$link = 'mysql:host=localhost; dbname=bd_colores';
$usuario = 'root';
$contraseña = '';

try {
    $pdo = new PDO($link, $usuario, $contraseña);
    //echo 'conectado';

    // foreach($pdo->query('SELECT * from color') as $fila) {
    //     print_r($fila);
    // }
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
