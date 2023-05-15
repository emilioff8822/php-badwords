<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>


<body>
  <form action="atterraggio.php" method="post">
  <label for="paragrafo"> Inserisci il paragrafo</label> <br>
  <textarea name="paragrafo" id="paragrafo" cols="50" rows="2"></textarea> <br>

  <label for="parola">Inserisci la Parola da Censurare</label> <br>
  <input type="text" id="parola" name="parola"> <br>
<button type="submit"> Invia</button>


  </form>
  
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
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    label, textarea, input, button {
      display: block;
      width: 100%;
      margin-bottom: 10px;
    }
    button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</html>