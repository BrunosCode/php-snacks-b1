<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
include __DIR__ . "/partials/arrays.php";
include __DIR__ . "/partials/functions.php";

var_dump(randStudents(10, $names, $surnames, 10));
$students = randStudents(10, $names, $surnames, 10);
var_dump($students);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>
    <?php foreach ($students as $student) { ?>
    <div>
        <h3><?= $student["name"] ?> <?= $student["surname"] ?></h3>
        <p>Average: <?php echo average($student["marks"]) ?></p>
    </div>
    <?php } ?>
</body>
</html>