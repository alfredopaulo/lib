<?php






?>






<input type="button" value="Voltar" onclick="history.go(-1)">

<?php

//mostrar os livros 
//$db = new PDO($dsn, $username);

 $dsn = 'mysql:host=localhost;dbname=integracao';
 $username = "root";
 $db = new PDO($dsn, $username);

$query = "SELECT * FROM livros";
    $result = $db->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Status</th>";
    echo "<th>Título</th>";
    echo "<th>Autor</th>";
  


    //mostrar os livros no html
    $livros = array();
    foreach ($result as $row) {
        $livros[] = array('id' => $row['id'], 'titulo' => $row['titulo'], 'autor' => $row['autor'], 'stats' => $row['stats']);
        echo "<TR>";
        echo "<TD>".$row['id']."</TD>";
        echo "<TD>".$row['stats']."</TD>";
        echo "<TD>".$row['titulo']."</TD>";
        echo "<TD>".$row['autor']."</TD>";
        echo "</TR>";
    }






?>
