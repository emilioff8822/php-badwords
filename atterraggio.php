<?php

$paragrafo = $_POST["paragrafo"];
$parola =  $_POST ["parola"];

$paragrafo_censurato = str_replace( $parola, '***', $paragrafo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atterraggio</title>
</head>
<body>

 <p>Paragrafo Originale: <?php echo $paragrafo; ?></p> 
 <p> Lunghezza Paragrafo Originale: <?php echo strlen($paragrafo); ?></p> 

 <p>Paragrafo censurato: <?php echo $paragrafo_censurato; ?> </p>
 <p> Lunghezza Paragrafo censurato: <?php echo strlen($paragrafo_censurato); ?> </p>
</body>
</html>