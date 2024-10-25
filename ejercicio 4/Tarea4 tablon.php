<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="tablonej4.css">
</head>
<body>
<?php
$equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
"Villarreal", "FC Barcelona", "Sevilla", "Getafe",
"Valencia", "Cádiz", "Granada", "Osasuna", "Atletico", "Celta de Vigo", "Eibar", "Huesca", "Elche",
"Alavés", "Levante", "Athletic Club", "Real Valladolid"];
shuffle($equipos);
$locales=array_slice($equipos,0,10);
$visitantes=array_slice($equipos,10,10);
echo "<table><h1>Resultados Jornada</h1>    ";
for ($i=0;$i<10;$i++){
    $golesLocales[$i]=rand(0,6);
    $golesVisitantes[$i]=rand(0,6);
    echo "<tr><td><img src='imagenes/".$locales[$i].".jpg'/>".$locales[$i]."</td><td>".$golesLocales[$i]."-".$golesVisitantes[$i]."</td><td><img src='imagenes/".$visitantes[$i].".jpg'/>".$visitantes[$i]."</td>";
}
?>
    </table>
</body>
</html>