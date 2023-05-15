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
<div class="container">
<p>Paragrafo Originale: <?php echo $paragrafo; ?></p>  <br>
 <p> Lunghezza Paragrafo Originale: <?php echo strlen($paragrafo); ?></p>  <br>

 <p>Paragrafo censurato: <?php echo $paragrafo_censurato; ?> </p> <br>
 <p> Lunghezza Paragrafo censurato: <?php echo strlen($paragrafo_censurato); ?> </p> <br>
</div>

</body>

<style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
      width: 500px;
    }
    p {
      font-weight: bold;
      margin-bottom: 10px;
    }
  </style>
</html>