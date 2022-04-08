
<html>

    <form action="#" method="post">
        <input type="hidden" name="action" value="excluirAluno">

        <input type="number" name="codigo" value="codigo">
        <input type="submit" value="Excluir" />
    </form>

    <?php

        include_once("../../model/database.php");
        include_once("../../model/Aluno.php");

        if (isset($_POST['action']) && $_POST['action'] == 'excluirAluno') {
            $codigo = $_POST['codigo'];
            desativarAluno($codigo);
        }

        include_once('../Aluno/listarAlunos.php')

    ?>

</html>
