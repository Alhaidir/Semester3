<?php

$nama = ["Ahmad","Budi","Chika","Dhini","Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8>
        <tittle>Looping For Array</tittle>
</head>
<body>
    <?php
    foreach ($nama as $absen) {
        echo "<li>$absen</li";
    }

    ?>

</body>
</html>