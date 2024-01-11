<?php
// salvo in variabile i dati in striga che ho acquisito da 
$string = file_get_contents(__DIR__ . '/dischiServer.json'); //stringhe in formato json

//per rendere fruibile il dato
$todos = json_decode($string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!--file css-->
    <link href="src/css/style.css" rel="stylesheet">
    <!--/file css-->
</head>
<body>
    <!--vue workarea-->
    <div id="app" v-cloak>
        <h1>List Music</h1>
        <!--lista dischi-->
        <ul class="list-albums d-flex gap-2">
            <li v-for="disco in dischi" class="album text-center">
                <img :src="disco.poster" :alt="disco.titleCd" class="img-fluid">
                <h3>{{ disco.author }}</h3>
                <h4>{{ disco.titleCd }}</h4>
                <h6>{{ disco.year}}</h6>
            </li>
        </ul>
        <!--/lista dischi-->
    </div>
    <!--/vue workarea-->
    
    <!--CDN Vuejs-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--/CDN Vuejs-->
    <!--CDN axios js-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--/CDN axios js-->
    <!--file js-->
    <script src="src/js/main.js"></script>
    <!--/file js-->
</body>
</html>
