<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free and fun Loopieloop maker!">
    <link rel="stylesheet" href="main.css">
    <title>De LoopoeLoop Maker | output</title>
</head>
<body>
<h1>de loopieloop maker 2000xr20ultrapro10000gang</h1>
    <p class="output">
    <?php
        // variables
        $sentence = $_POST["sentence"];
        $amount = $_POST["amount"];
        // if statement voor errors
        if ($amount == 0 || $amount == "") {
            echo "Input Error: Je moet nog een hoeveelheid geven...";
            exit();
        } elseif  ($sentence == 0 || $sentence == "") {
            echo "Input Error: Je moet wel een zin of iets in voeren....";
            exit();
        }
        // de loop zelf voor output
        for ($i = 1;$i <= $amount;$i++) {
            $var1 = array($_POST["sentence"]);
            $shuffle = substr(str_shuffle($sentence), 0, $amount);
            echo "[$i] $shuffle <br>";
        }
    ?>
    </p>
</body>
</html>