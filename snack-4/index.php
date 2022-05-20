<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$class = [
    [
        "name" => 'Mario',
        'lastname' => 'De Angelis',
        'grades' => [9, 7, 5, 7, 8]
    ],
    [
        "name" => 'Pietro',
        'lastname' => 'Proietti',
        'grades' => [8, 6, 5, 4, 5]
    ],
    [
        "name" => 'Fabrizio',
        'lastname' => 'Soleri',
        'grades' => [9, 8, 8, 7, 8]
    ],
    [
        "name" => 'Claudio',
        'lastname' => 'Di Gennaro',
        'grades' => [3, 6, 5, 6, 7]
    ],
    [
        "name" => 'Cinzia',
        'lastname' => 'Vallesi',
        'grades' => [2, 6, 5, 6, 8]
    ],
    [
        "name" => 'Sara',
        'lastname' => 'Spadini',
        'grades' => [9, 5, 8, 5, 6]
    ]
];

var_dump($class);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>
    <?php for ($i = 0; $i < count($class); $i++) : ?>
        <h3>Nome: <?php echo $class[$i]['name']; ?>; Cognome: <?php echo $class[$i]['lastname']; ?>; Media voto: <?php echo array_sum($class[$i]['grades']) / count($class[$i]['grades']); ?></h3>
    <?php endfor; ?>
</body>

</html>