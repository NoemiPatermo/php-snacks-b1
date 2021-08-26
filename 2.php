<?php
/*
Passare 3 parametri GET: name, mail e age.
Verificare (cercando i metodi che non conosciamo nella documentazione)
 - che name sia più lungo di 3 caratteri
 - che mail contenga un punto e una chiocciola
 - che age sia un numero
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato".
*/
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if(strlen($name) > 3 && strpos($mail , '.')!== false && strpos($mail , '@')!== false && is_numeric($age)) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}
?>