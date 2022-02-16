<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

$randomNumbers = [];   // creo array vuoto da popolare con numeri randomici generati da rand


// finché nell'array non ci sono 15 numeri, genera dei numeri da 1 a 50
// inoltre, per evitare ripetizioni, inseriscili nell'array soltanto se NON sono già presenti (if condition)

while (count($randomNumbers) < 15) {
    $random = rand(1, 50);

    if (!in_array($random, $randomNumbers)) {
        $randomNumbers[] = $random;
    }
}


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

    <h3>I numeri random sono:</h3>

    <?php

    // con un ciclo for, stampo i numeri randomici secondo il loro indice corrente
    
    for ($i = 0; $i < count($randomNumbers); $i++) {
        echo '<span>'  . $randomNumbers[$i] . '</span>' . ' - ';
    }
    
    ?>

</body>

</html>