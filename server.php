<?php

// 1: logica di operazioni (letttura dischi)
$database = file_get_contents(__DIR__ . '/dischiServer.json');
$dischi = json_decode($database); //json a array associativi php

    // passo il parametro e mostro il disco, domanda in lettura
    if (isset($_GET['index'])) {
        $index = $_GET['index'];
        $disco_corrente = $dischi[$index]; //array_search // array
        header('Content-Type: application/json');
        echo json_encode($disco_corrente); // per dare all'utente l'array devo trasformarlo in stringa json
        die; // stop esecuzione
    }

// 2: formato dell'output
header('Content-Type: application/json');

// 3: output
echo json_encode($dischi); //stringa
?>