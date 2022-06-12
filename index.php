<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./vue-dischi/database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    
    <header class="header"> 

    </header>

    <main class="main"> 
        <section class="container">
                    <?php  foreach($database as $dataOption) { ?>

                        <img src="<?php echo $dataOption["poster"];  ?>" alt="">
                         <h3> <?php echo $dataOption["title"]; ?></h3>
                         <p> <?php echo $dataOption["author"]; ?></p>
                         <p> <?php echo $dataOption["year"]; ?></p>

                 <?php } ?>  
                   
 
        </section>
    </main>
</body>
</html>