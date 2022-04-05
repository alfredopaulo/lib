<html>

    <form action="../../index.php" method="post">
        <fieldset>
            <legend>Cadastrar</legend>
            <input type="hidden" name="action" value="cadastrarUsuario">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="" />

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" value="" />
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="" />
            
            <label  for="email">Email:</label>
            <input type="email" id="email" name="email" value="" />
            
            <label for="nivel">Nivel:</label>
            <input type="text" id="nivel" name="nivel" value="" />
            
            <label for="ativo">Ativo:</label>
            <input type="text" id="ativo" name="ativo" value="" />

            <label for="logradouro">Logradouro: </label>
            <input type="text" id="logradouro" name="logradouro" value="" />
            
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" value="" />
            
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" value="" />
            
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="" />
            
            <label for "cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="" />


            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="" />
            
            <label for="uf">UF:</label>
            <input type="text" id="uf" name="uf" value="" />
            
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="" />
            
            <input type="submit" value="cadastrar" />
            <input  type="reset" value="Limpar" />
            <input type="button" value="Voltar" onclick="history.go(-1)">
        </fieldset>
    </form>
</html>

<?php include('../footer.php') ?>