
<?php

include("../model/database.php");
include("../model/libra_db.php");

?>

<form action="#" method="post">
    <input type="hidden" name="action" value="totalAutor">
    <input type="submit" value="Listar" />

</form>

<input type="button" value="Voltar" onclick="history.go(-1)">


<?php

//mostra o total de livros por autor
if (isset($_POST['action']) && $_POST['action'] == 'totalAutor') {
 //   $autor = $_POST['autor'];
  //  totalAutor($autor);
    totalAutores();
}

?>