<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
include __DIR__ . "/partials/arrays.php";
include __DIR__ . "/partials/functions.php";

$stundents = randStudents(10, $names, $surnames, 10);
var_dump($students);
?>