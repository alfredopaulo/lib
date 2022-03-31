<?php
//include_once('sessao.php');

?>

<html>
<form action="../index.php" method="POST">
    <fieldset>
        <legend>Cadastrar livro</legend>
        <input type="hidden" name="action" value="cadastrarLivro">
        <label for="nome">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="" />
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="" />
        <label for="status">Status:</label>
        <input type="text" id="stats" name="stats" value="" />
        <input type="submit" value="cadastrar" />
        <input  type="reset" value="Limpar" />
        <input type="button" value="Voltar" onclick="history.go(-1)">
</form>



</html>