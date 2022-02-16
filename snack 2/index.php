<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

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

    <?php

    if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo '<h3>Accesso Riuscito!</h3>';
    } else {
        echo '<h3>Accesso Negato! Ricordati di inserire correttamente i dati richiesti.';
    }

    ?>

</body>

</html>

<!-- esempio url con query string: http://localhost/php-snacks-blocco-1/snack%202/?name=chiara&mail=ciao.ciao@gmail.com&age=23 -->


<!-- 1° alternativa con strpos:

    if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
        echo '<h3>Accesso Riuscito!</h3>';
    } else if (strlen($name) > 3 && strpos($mail, '.') == false && strpos($mail, '@') == false && is_numeric($age))  {
        echo '<h3>Accesso Negato!</h3>';
    }
 -->

<!-- strpos() !== false -> serve per sicurezza, quando bisogna chiedere SE E’ PRESENTE
e per distinguere il caso PRESENTE IN POSIZIONE 0 dal caso NON PRESENTE (FALSE)
-->