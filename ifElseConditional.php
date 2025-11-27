<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201  -->
<?php 
    $stocks = 5;
    $ordered = 3;

    if ($stocks > 0) {
        $message = 'Have Stocks!';
    } elseif ($ordered > 0) {
        $message = 'Coming Soon!';
    } else {
        $message = 'No Stocks Available Sorry :( ';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <<link rel="stylesheet" href="css/styles.css">
        <title>Using-If-Elseif-Statement</title>
    </head>
    <body>
        <h1>Welcome to the Fish Market!</h1>
        <br>
        <h2>What can we do for you today?</h2>
        <h3>Here are the Available Fishes: </h3>
        <p>Tilapia: <?= $message ?></p>
        <p>Bangus: <?= $message ?></p>
        
    </body>
</html>