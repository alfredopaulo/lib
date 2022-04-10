
<!--
//form para atualizar um livro por codigo
-->

<form action="#" method="post">
    <input type="hidden" name="action" value="atualizarLivro">

    <input type="number" name="codigo" value="codigo">
    <input type="text" name="ISBN" value="ISBN">
    <input type="text" name="nome" value="nome">
    <input type="text" name="autor" value="autor">
    <input type="text" name="ano_publicacao" value="ano_publicacao">
    <input type="text" name="status_ativo" value="status_ativo">
    <input type="submit" value="Atualizar" />
</form>

<?php

    include("../model/database.php");
    include("../model/Livro.php");

    //atualizarLivro atraves do codigo do livro
    if (isset($_POST['action']) && $_POST['action'] == 'atualizarLivro') {
        $codigo = $_POST['codigo'];
        $ISBN = $_POST['ISBN'];
        $nome = $_POST['nome'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_publicacao'];
        $status_ativo = $_POST['status_ativo'];

        atualizarLivro($codigo, $ISBN, $nome, $autor, $ano_publicacao, $status_ativo);
    }

    listarLivros();

?>

<div class="excluir">
        a href="/lib/view/Livro/excluirLivro.php">Excluir Aluno</a>
</div>
