<?php
// lettura dischi
$database = file_get_contents(__DIR__ . '/dischiServer.json');
$dischi = json_decode($database); //stringa

// passo il parametro e mostro il disco, domanda in lettura
if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $disco_corrente = $dischi[$index]; //array_search // array
    header('Content-Type: application/json');
    echo json_encode($disco_corrente);
    die;
}

header('Content-Type: application/json');
echo json_encode($dischi); //stringa
?>