<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201  -->
<?php 
    $day = 'Sunday';

    switch ($day) {
        case 'Friday':
            $offer = '20% off Tilapia';
            break;
        case 'Saturday':
            $offer = '20% off Bangus';
            break;
        default:
            $offer = 'Buy 5 Tilapia, get one free Bangus';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <title>Using Switch Statement</title>
    </head>
    <body>
        <h1>Fish Market</h1>
        <br>
        <h2>Available: </h2>
        <h2>Tilapia</h2>
        <p><?= $offer ?></p>
        
    </body>
</html>