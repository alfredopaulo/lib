<?php

session_start();


include './../app/autoload.php';
include './../app/config.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
      echo APP_NOME;    ?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?=URL?>/public/css/style.css">
      
</head>
<body>

  <?php
  include '../app/Views/header.php';
    $rotas = new Rota();
    include '../app/Views/footer.php';
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL?>/public/js/main.js"></script>
</body>
</html>