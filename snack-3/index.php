<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$rand_numbers = [];

while (count($rand_numbers) < 15) {
    $number = rand(1, 100);

    if (!in_array($number, $rand_numbers)) {
        array_push($rand_numbers, $number);
    }
}

var_dump($rand_numbers);
?>