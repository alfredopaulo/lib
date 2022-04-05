
<html>
    <form action="../../index.php" method="post">
        <fieldset>
            <legend>Cadastrar Emprestimo</legend>
            <input type="hidden" name="action" value="cadastrarEmprestimo">

            <label for="id_aluno">Aluno</label>
            <input type="text" id="id_aluno" name="id_aluno" value=""/>

            <label for "data_emprestimo">Data do Emprestimo:</label>
            <input type="text" id="data_emprestimo" name="data_emprestimo" value="" />

            <label for="data_devolucao">Data de Devolucao:</label>
            <input type="text" id="data_devolucao" name="data_devolucao" value="" />
            
            <input type="submit" value="cadastrar" />
            <input  type="reset" value="Limpar" />
            <input type="button" value="Voltar" onclick="history.go(-1)">
        </fieldset>
    </form>
</html>

<?php include('status.php') ?>
<?php include('footer.php') ?>
