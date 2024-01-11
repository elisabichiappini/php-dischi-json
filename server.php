<?php

// inizializziamo dati in versione array di array associativi
$dischiServer = [ // 1 livello di array
        [ // 2 livello di array
            'poster' => 'link',
            'titleCd' => 'x',
            'author' => 'billie ellish',
            'year' => '1990'
        ],
        [
            'poster' => 'link',
            'titleCd' => 'j',
            'author' => 'britney spears',
            'year' => '1990'
        ],
        [
            'poster' => 'link',
            'titleCd' => 'y',
            'author' => 'ex-otago',
            'year' => '1990'
        ],
    ];


    //lettura di dati, trasformati in dati json (ossia stringhe) per essere letti da frontend -> diventa un array di oggetti;
    header('Content-Type: application/json');
    echo json_encode($dischiServer);
?>

