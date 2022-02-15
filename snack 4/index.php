<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

$randomNumber = array();

for ($i = 0; $i <= 15; $i++) {
    $randomNumber[] = "<span />" . rand(0, 100) . "<br />";
}

print_r($randomNumber);

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

</body>

</html>


<!-- print_r() displays information about a variable in a way that's readable by humans. -->