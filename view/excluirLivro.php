


<?php


include("../model/database.php");
include("../model/libra_db.php");


?>


<html>


    <form action="#" method="post">
        <input type="hidden" name="action" value="excluirLivro">
        <input type="number" name="codigo" value="codigo">
        <input type="submit" value="Excluir" />

    </form>


    <?php


    //exluirLivro atraves do codigo do livro
    if (isset($_POST['action']) && $_POST['action'] == 'excluirLivro') {
        $codigo = $_POST['codigo'];
        excluirLivro($codigo);
    }

    include('listarLivros.php');

    ?>



</html>

