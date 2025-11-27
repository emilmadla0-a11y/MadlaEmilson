<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201  -->
<?php 
    $counter = 1;
    $packs = 20;
    $prices = 70;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <title>Using Do While Loop</title>
    </head>
    <body>
        <h1>Welcome to the Fish Market!</h1>
        <br>
        <h2>What can we do for you today?</h2>
        <p>Prices for Multiple Fish</p>
            <?php
            do {
                echo $packs;
                echo ' Tilapia Cost: P';
                echo  $prices * $packs;
                echo '<br>';
                $packs--;
            } while ($packs > 0);
            ?>
    </body>
</html>