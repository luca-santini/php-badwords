<?php
// creo una variabile con del testo
$string = "You should eat fruits, vegetables, and meat every day.";
// censurate una "badword" che viene passata in GET con la stringa ***.
$badword = $_GET['word'];
$new_word = "***";
$new_string = str_replace($badword, $new_word, $string);
$lenght = strlen($new_string);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad word</title>
    </head>
    <body>
        <p> <?php echo $new_string ?> </p>
        <!-- Stampo a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->
        <p> <?php echo $badword ?> </p>
        <p> <?php echo $lenght ?> </p>
    </body>
</html>
