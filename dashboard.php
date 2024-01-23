<?php 
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phrase = $_GET['phrase'];
    $word = $_GET['word'];
    $censored = "***";
    $censoredPhrase = str_replace($word, $censored, $phrase);
    $censoredPhrase = str_replace($word, $censored, $censoredPhrase);
    $censoredPhrase = str_replace($word, $censored, $censoredPhrase);
    $censoredPhrase = str_replace($word, $censored, $censoredPhrase)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Censored BadWords</title>
</head>
<body>
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Ciao, <?php echo $name.' '.$surname ?>!</h1>
            </div>

            <div class="col-12 mt-5">
                <b>Paragrafo senza censure:</b>
                <p>La lunghezza del tuo paragrafo è: <?php echo strlen($phrase) ?></p>
                <p><?php echo $phrase ?></p>
            </div>
            <div class="col-12 mt-5">
                <b>Paragrafo con censure:</b>
                <p>La lunghezza del tuo paragrafo è: <?php echo strlen($phrase) ?></p>
                <p><?php echo $censoredPhrase ?></p>
            </div>
        </div>
    </div>
</body>
</html>