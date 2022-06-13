<?php  
    include __DIR__ . "/vue-dischi/database.php";
    // var_dump($database);
    $database_json = json_encode($database); /* codifica con encode */
    var_dump($database_json); /* Vediamo una STRINGA json */
    header("Content-Type: aplication/json"); /* In questo momento cediamo in modalità json, adesso possiamo usare anche postman (copiamo il link url e lo mettiamo in pos)*/
    echo $database_json;
?>

 