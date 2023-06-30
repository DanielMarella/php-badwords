<?php

$paragraph = $_POST ['paragraph'];

$wordToCensor = $_POST ['wordToCensor'];

$censoredParagraph = str_replace($wordToCensor, '***', $paragraph);

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
        echo "<h4>Paragrafo originale: &darr; </h4>";
        echo  "<p>$paragraph;</p>";
        echo "<p> La lunghezza del paragrafo è: " . strlen($paragraph) . "</p>";
        ?>

        <?php
        echo "<h4>Paragrafo censurato : &darr; </h4>";
        echo "<p> $censoredParagraph </p>";
        echo "<p>La lunghezza del paragrafo censurato è: " . strlen($censoredParagraph) . "</p>"
        ?>

</body>
</html>