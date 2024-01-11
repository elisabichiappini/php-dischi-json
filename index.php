<?php
echo "<pre>";
// salvo in variabile i dati in striga che ho acquisito da 
$string = file_get_contents(__DIR__ . '/dischiServer.json'); //stringhe in formato json
var_dump($string);

echo "<hr>";
//per rendere fruibile il dato
$todos = json_decode($string);
var_dump($todos);
echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
</head>
<body>
    <h1>List Music</h1>
    <span></span>

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
