<?php

$paragraph = $_GET ['paragraph'];

$censoredWord = $_GET ['wordToCensor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
        <?php 
        
        echo "<h4>Paragrafo: &darr; </h4>";
        echo  "<p>$paragraph;</p>";
        echo "<p> La lunghezza del paragrafo è: " . strlen($paragraph) . "</p>";
        ?>

</body>
</html>