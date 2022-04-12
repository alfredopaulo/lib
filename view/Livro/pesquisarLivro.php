
<?php

    include("../../model/database.php");
    include("../../model/Livro.php");
    
?>
<?php

include('../verifica_logado.php');

?>


<input type="button" value="Voltar" onclick="history.go(-1)">

<form action="#" method="POST">
    <input type="hidden" name="action" value="pesquisarLivro">

    <input type="text" name="titulo" value="titulo">
    <input type="submit" value="Pesquisar">
</form>

<?php

    //pesquisarLivro atraves do titulo do livro
    if (isset($_POST['action']) && $_POST['action'] == 'pesquisarLivro') {
        $titulo = $_POST['titulo'];
        pesquisarLivro($titulo);
    }

?>