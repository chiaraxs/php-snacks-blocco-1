<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$matches = [
    
    [
        'homeTeam' => 'Toronto Raptors',
        'guests' => 'Orlando Magic',
        'scoreHomeTeam' => 30,
        'scoreGuests' => 50,
    ],

    [
        'homeTeam' => 'Miami Heat',
        'guests' => 'Indiana Pacer',
        'scoreHomeTeam' => 80,
        'scoreGuests' => 20,
    ],

    [
        'homeTeam' => 'Charlotte Hornets',
        'guests' => 'Chicago Bulls',
        'scoreHomeTeam' => 60,
        'scoreGuests' => 75,
    ],

    [
        'homeTeam' => 'Cleveland Cavaliers',
        'guests' => 'New York Knicks',
        'scoreHomeTeam' => 80,
        'scoreGuests' => 83,
    ],
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Today's matches:</h1>

    <?php

    echo "<ul>";

    for ($i = 0; $i < count($matches); $i++) {
        echo "<li> {$matches[$i]["homeTeam"]}  -  {$matches[$i]["guests"]} | {$matches[$i]["scoreHomeTeam"]}  -  {$matches[$i]["scoreGuests"]} </li>";

        // echo $matches[$i]["homeTeam"] . '-' . $matches[$i]["guests"] . ' ' . '|' . ' ' . $matches[$i]["scoreHomeTeam"] . '-' . $matches[$i]["scoreGuests"] . '<br>';
    }
    

    echo "</ul>";
    
    
    ?>

</body>
</html>