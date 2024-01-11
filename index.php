<?php
//prendo i valori da nuovoFile.json
$dischiString = file_get_contents('dischiServer.json');

//trasformazione le stringhe JSON in array php
$dischiAvailable = json_decode($dischiString, true);

// stampo l'array che ho preso dal dischiServer.json e controllo che sia corretto in php
echo "<pre>";
var_dump($dischiAvailable);
echo "</pre>";
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
    
</body>
</html>
