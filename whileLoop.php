<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201  -->
<?php 
    $counters = 1;
    $fish = 15;
    $prices = 85;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <title>Using While Loop</title>
    </head>
    <body>
        <h1>Welcome to the Fish Market!</h1>
        <br>
        <h2>Prices for Multiple Fish</h2>
        <p>
            <?php
            while ($counters <= $fish) {
                echo $counters;
                echo ' Tilapia Costs: P';
                echo $prices * $counters;
                echo '<br>';
                $counters++;
            }
            ?>
        </p>
    </body>
</html>