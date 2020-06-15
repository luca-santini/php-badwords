<!-- Si tratta di un censuratore rudimentale:
- predisponete una variabile contenente un breve testo,
- poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
- Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->
<?php
// creo una variabile con del testo
$quote = "The original idea of the web was that it should be a collaborative space where you can communicate through sharing information.";
// censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
$bad_words = array("web","space");
$good_words = array("world wide web","enviroment");
$new_quote = str_replace($bad_words, $good_words,  $quote)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p> Original Quote: <?php echo $quote ?> </p>
        <p> Modified Quote: <?php echo $new_quote ?> </p>
    </body>
</html>
