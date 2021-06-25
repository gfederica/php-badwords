<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!-- http://localhost/php-badwords/?censored=lorem -->


<?php

$paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nisi veritatis lorem, vitae velit lorem laboriosam a aspernatur maiores dolores ratione voluptatibus. Lorem ipsum.';
$paragrafoMinuscolo = strtolower($paragrafo);


$parolaDaCensurare = $_GET["censored"];
$parolaDaCensurare = strtolower($parolaDaCensurare);

$censura = '...';

$risultato = str_replace($parolaDaCensurare, $censura, $paragrafoMinuscolo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p>Paragrafo originale: <br> <?php echo $paragrafo ?></p>
    <p>Lunghezza: <?php echo strlen($paragrafo); ?></p>

    <p>Paragrafo con censura: <br> <?php echo $risultato ?></p>
    <p>Lunghezza: <?php echo strlen($risultato); ?> </p>

</body>
</html>