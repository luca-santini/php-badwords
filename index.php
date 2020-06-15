<!-- Si tratta di un censuratore rudimentale:
- predisponete una variabile contenente un breve testo,
- poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
- Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->
<?php
// creo una variabile con del testo
$string = "You should eat fruits, vegetables, and meat every day.";
// censurate una "badword" che viene passata in GET con la stringa ***.
$bad_word = $_GET['meat'];
$new_word = "***";
$new_string = str_replace($bad_word, $new_word, $string);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad word</title>
    </head>
    <body>
        <p> <?php echo $new_string ?> </p>
    </body>
</html>
