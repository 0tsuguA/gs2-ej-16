<?php

header('Content-Type: application/json');

require_once '../../modelo/jugador.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$r = new NuevoResponse();
$r->IsOk = true;
$cj = 0;

foreach ($req->$ListJugadores as $j) {
    $cj = $cj + 1;
}

if ($cj > 1 or $cj <= 5) {
    $r->Mensaje = 'El equipo posee ' . $cj .  ' jugadores';
} else {
    $resp->IsOk = false;
    $resp->Mensaje = 'El equipo posee ' . $cantj .  ' y debe poseer entre 1 y 5  jugadores';
}

echo json_encode($r);
