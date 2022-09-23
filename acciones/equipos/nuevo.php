<?php

header('Content-Type: application/json');

require_once '../../modelo/jugador.php';
require_once 'responses/nuevoResponse.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

foreach ($req->$ListJugadores as $j) {
    
}

echo json_encode($);