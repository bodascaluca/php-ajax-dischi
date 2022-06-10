<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./vue-dischi/database.php");
// var_dump($database);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    
    <header class="header"> 

    </header>

    <main class="main"> 
        <section class="container">
                    <?php 
                        foreach($database as $dataOption) { ?>
                         <h2> <?php echo $dataOption["poster"]; ?> </h2>
                         <h3> <?php echo $dataOption["title"]; ?></h3>
                         <p> <?php echo $dataOption["author"]; ?></p>
                         <p> <?php echo $dataOption["year"]; ?></p>

                         <!-- <p> <?php echo $dataOption["genre"]; ?></p> -->
                 

                 <?php> }?>  
                   
                      <!-- foreach($dataOption as $dataInput){
                    echo '<img . class="img"' . ':src="' . $dataInput["poster"] . '"' . 'alt=""> ';
                   } -->
                    <!-- <img class="img" :src="album.poster" alt="">
                    <h3>{{ album.title}}</h3>
                    <p> {{ album.author}}</p>
                    <p>{{ album.year}}</p> -->
        </section>
    </main>
</body>
</html>