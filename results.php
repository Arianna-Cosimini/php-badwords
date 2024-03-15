<?php

$userText = $_GET['user-text'];
$userWord = $_GET['user-word'];

$paragrafoCensurato = str_ireplace($userWord, '***', $userText);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Risultati dal form</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mb-5">Risultati dal form</h1>

        <div id="content-container" class="d-flex justify-content-between">
            <div id="original-paragraph" class="d-flex flex-column pe-3">

                <?php
                // stampo il paragrafo
                echo "<h2>Paragrafo originale:</h2>";
                echo "<p>$userText</p>";
                echo "<p>Lunghezza del paragrafo: " . strlen($userText) . "</p>";

                ?>
            </div>

    <div id="censured-paragraph" class="d-flex flex-column pe-3">
            <?php
            // Stampo il paragrafo censurato e la sua lunghezza
            echo "<h2>Paragrafo censurato:</h2>";
            echo "<p>$paragrafoCensurato</p>";
            echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . "</p>";

            ?>

    </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>