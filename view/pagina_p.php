<?php

//include('session.php');

?>
<br>
<a href="./view/formCadastrar.php">cadastrar</a>
<br>
<a href="/libra/">login</a>
<br>

<a href="./view/formCadastrarLivro.php"> Cadastrar livro </a>
<br>

<a href="./view/excluirLivro.php"> Excluir livro</a>

<br>

<a href="./view/atualizarLivro.php"> Atualizar Livro</a>
<br>

<a href="./view/totaldelivrosporautor.php"> Total de Livros por autor</a>
<br>
<a href="./view/pesquisarLivro.php"> Pesquisar Livro</a>

<br>
<a href="./view/formCadastrarAluno.php">Cadastrar Aluno</a>
<br>

<a href="./view/formCadastrarEmprestimo.php">Cadastrar Emprestimo</a>
<br>

<form action="." method="post">
    <input type="hidden" name="action" value="listarLivros">
    <input type="submit" value="listarLivros" />
</form>

<form action="." method="post">
    <input type="hidden" name="action" value="listar_emprestimos">
    <input type="submit" value="listar Emprestimos" />
</form>








<?php

//echo "<a href='./view/logout.php'>Deslogar</a>";

?>

<html>



<h1>Página restrita</h1>


