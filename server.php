<?php

// inizializziamo dati in versione array di array associativi in php
$dischi = [ 
        [ 
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

    //salvo una copia dei dati in una variabile
    $dischiServer = $dischi;
    //definisco il tipo di header del file come json
    header('Content-Type: application/json');
    //salvo in una variabile la conversione dei dati.php in dati.json
    $dischiJson = json_encode($dischiServer);
    //i dati, essendo diventate delle stringhe.json, le vado a caric.
    file_put_contents('dischiServer.json', $dischiJson);
?>

