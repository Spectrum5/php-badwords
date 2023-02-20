<?php
$text = "Im not afraid to take a stand

Everybody come take my hand

Well walk this road together, through the storm

Whatever weather, cold or warm

Just let you know that, youre not alone

Hola if you feel that youve been down the same road";
$word = $_GET['word'];
$censure = str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="word" placeholder="Inserisci una parola da censurare..">
        <button>Censura</button>
    </form>
    <h1> <?php echo $censure . '<br>' . " Il Paragrafo è composto da: " .  strlen($censure) . ' caratteri' ?> </h1>
</body>

</html>