<!-- <html>

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
</html> -->

<?php include('../footer.php') ?>

<!DOCTYPE html>

<head>

<link rel="stylesheet" href="/libra/view/styles.css">

  <title>Cadastrar</title>

</head>

<body>
  <div id="cadastrar">

    <form class="card" action="../../index.php" method="post">

      <div class="card-header">

        <h2>Fazer Cadastro</h2>

      </div>

      <div class="card-content">
        <input type="hidden" name="action" value="cadastrarUsuario">
        
        <div class="card-content-area">

          <input type="text" id="cpf" name="cpf" autocomplete="off" placeholder="CPF">

        </div>

        <div class="card-content-area">
        
          <input type="text" id="nome" name="nome" autocomplete="off" placeholder="Nome">

        </div>

        <div class="card-content-area">

          <input type="text" id="usuario" name="usuario" autocomplete="off" placeholder="Usuario">

        </div>

        <div class="card-content-area">

          <input type="text" id="senha" name="senha" autocomplete="off" placeholder="Senha">

        </div>

        <div class="card-content-area">

          <input type="text" id="email" name="email" autocomplete="off" placeholder="Email">

        </div>

        <div class="card-content-area">

          <input type="text" id="telefone" name="telefone" autocomplete="off" placeholder="Telefone">

        </div>

        <div class="card-content-area">

          <input type="text" id="nivel" name="nivel" autocomplete="off" placeholder="Nível">

        </div>

      </div>

      <div class="card-footer">

        <input type="submit" value="cadastrar">
        <input type="button" value="Voltar" onclick="history.go(-1)">

      </div>

    </form>

  </div>

</body>

</html>

<?php include('../footer.php') ?>