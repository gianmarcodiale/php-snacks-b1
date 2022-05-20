<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
# PRENDO I TRE PARAMETRI NECESSARI DALLA QUERY STRING
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
// var_dump($name, $email, $age);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <?php if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) : ?>
        <h1>Accesso riuscito!</h1>

    <?php else : ?>
        <h1>Accesso negato!</h1>

    <?php endif; ?>
</body>

</html>