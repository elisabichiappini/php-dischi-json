<?php

// inizializziamo dati in versione array di array associativi in php
$dischi = [ 
        [ 
            "poster" => "https://pbs.twimg.com/media/EJXUzRJWsAE3GGl?format=jpg&name=medium",
            "titleCd" => "Essentials",
            "author" => "Billie Ellish",
            "year" => "2020"
        ],
        [
            "poster" => "https://www.newsic.it/wp-content/uploads/2022/02/rosalia-album-2022.jpg",
            "titleCd" => "Motomami",
            "author" => "Rosalia",
            "year" => "2018"
        ],
        [
            "poster" => "https://m.media-amazon.com/images/I/61ooG1rHdtL._AC_SL1500_.jpg",
            "titleCd" => "Corochinato",
            "author" => "ex-otago",
            "year" => "2019"
        ],
        [
            "poster" => "https://mahmood.it/wp-content/uploads/2021/04/Ghettolimpo.jpg",
            "titleCd" => "Ghettolimpo",
            "author" => "Mahmood",
            "year" => "2021"
        ],
        [
            "poster" => "https://ih1.redbubble.net/image.2793637935.5733/raf,750x1000,075,t,101010:01c5ca27c6.webp",
            "titleCd" => "The Blaze",
            "author" => "The Blaze",
            "year" => "2017"
        ],
        [
            "poster" => "https://www.lafeltrinelli.it/images/0602445671052_0_536_0_75.jpg",
            "titleCd" => "Sirio",
            "author" => "Lazza",
            "year" => "2022"
        ],
    ];

    //salvo una copia dei dati in una variabile
    $dischiServer = $dischi;
    //definisco il tipo di header del file come json
    header('Content-Type: application/json');
    // carico nel file dischiServere.json creato exnovo la stringa convertita in array json
    file_put_contents('dischiServer.json', json_encode($dischiServer));
    //così controllo che il file.json qui è effettivamente attivo sul server
    echo file_get_contents('dischiServer.json');

?>

