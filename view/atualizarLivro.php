<?php

include("../model/database.php");
include("../model/libra_db.php");





?>


<!--
//form para atualizar um livro por codigo
-->

<form action="#" method="post">
    <input type="hidden" name="action" value="atualizarLivro">
    <input type="number" name="codigo" value="codigo">
    <input type="text"  name="autor" value="autor"  />
    <input type="text"  name="titulo" value="titulo"  />
    <input type="text"  name="stats" value="stats"  />
    <input type="submit" value="Atualizar" />
</form>


<?php

//atualizarLivro atraves do codigo do livro
if (isset($_POST['action']) && $_POST['action'] == 'atualizarLivro') {
    $codigo = $_POST['codigo'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $stats = $_POST['stats'];
    atualizarLivro($codigo, $autor, $titulo, $stats);
}

include('listarLivros.php');

?>