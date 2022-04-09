
<html>

    <form action="../../index.php" method="post">
        <input type="hidden" name="action" value="excluirAluno">

        <input type="number" name="codigo" value="codigo">
        <input type="submit" value="Excluir" />
    </form>

    <?php

        include('../Aluno/listarAlunos.php')

    ?>

</html>
