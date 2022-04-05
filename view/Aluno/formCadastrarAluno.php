<html>
    <form action="../../index.php" method="post">
        <fieldset>
            <legend>Cadastrar Aluno</legend>
            <input type="hidden" name="action" value="cadastrarAluno">

            <label for="matricula">Matricula</label>
            <input type="text" id="matricula" name="matricula" value=""/>

            <label for "cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="" />

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="" />

            <label  for="email">Email:</label>
            <input type="email" id="email" name="email" value="" />

            <label for "logradouro">Logradouro: </label>
            <input type="text" id="logradouro" name="logradouro" value="" />
            
            <label for "numero">Número:</label>
            <input type="text" id="numero" name="numero" value="" />

            <label for "bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="" />
            
            <label for "cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="" />
            
            <label for "estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="" />

            <label for "cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="" />
            
            <label for "complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" value="" />
            
            <input type="submit" value="cadastrar" />
            <input  type="reset" value="Limpar" />
            <input type="button" value="Voltar" onclick="history.go(-1)">
        </fieldset>
    </form>
</html>

<?php include('status.php') ?>
<?php include('footer.php') ?>