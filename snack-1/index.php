<?php
## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$games = [
    [
        'home' => 'Virtus Bologna',
        'away' => 'Fortitudo Bologna',
        'home_score' => '85',
        'away_score' => '79'
    ],
    [
        'home' => 'Olimpia Milano',
        'away' => 'Cantù',
        'home_score' => '55',
        'away_score' => '60'
    ],
    [
        'home' => 'Sassari',
        'away' => 'Pistoia',
        'home_score' => '69',
        'away_score' => '71'
    ],
    [
        'home' => 'Armani Milano',
        'away' => 'Venezia',
        'home_score' => '57',
        'away_score' => '77'
    ],
];

var_dump($games);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <h1>Risultati:</h1>
</body>

</html>