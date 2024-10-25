<?php
$equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
"Villarreal", "FC Barcelona", "Sevilla", "Getafe",
"Valencia", "Cádiz", "Granada", "Osasuna", "Atlético de
Madrid", "Celta de Vigo", "Eibar", "Huesca", "Elche",
"Alavés", "Levante", "Athletic Club", "Real Valladolid"];

/*Apartado A) generar dos arrays al azar de 10 elementos cada uno, $locales y
$visitantes, con los nombres de los equipos para hacer los emparejamientos de una
jornada.*/
shuffle($equipos);
$locales=array_slice($equipos,0,10);
$visitantes=array_slice($equipos,10,10);
echo '--------------APARTADO A) -------------';
echo "<h2> LOCALES </h2> ";
var_dump($locales);
echo "<h2> VISITANTES </h2> ";
var_dump($visitantes);

/*Apartado B) generar dos arrays al azar de 10 elementos cada uno, $golesLocales y
$golesVisitantes, de 0 a 6 goles.*/
for ($i=0;$i<10;$i++){
    $golesLocales[$i]=rand(0,6);
    $golesVisitantes[$i]=rand(0,6);
}
echo '<br><br>--------------APARTADO B) -------------';
echo "<h2> GOLES LOCALES </h2> ";
var_dump($golesLocales);
echo "<h2> GOLES VISITANTES </h2> ";
var_dump($golesVisitantes);
?>