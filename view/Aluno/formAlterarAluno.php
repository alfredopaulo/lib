
<!-- <form action="#" method="post">
    <input type="hidden" name="action" value="atualizarAluno">

    <label for="id">ID Aluno</label>
    <input type="text" id="id" name="id" value=""/>

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

    <input type="submit" value="Atualizar" />
</form> -->



<!DOCTYPE html>

<head>

<link rel="stylesheet" href="/libra/view/styles.css">

  <title>Alterar Aluno</title>

</head>

<body>
  <div id="cadastrar">

    <form class="card" action="#" method="post">

      <div class="card-header">

        <h2>Fazer Cadastro</h2>

      </div>

      <div class="card-content">
        <input type="hidden" name="action" value="cadastrarUsuario">

        <div class="card-content-area">
          <label for="nome">Nome:</label>
          <input type="text" id="id" name="id" value="" placeholder="Id">

        </div>

        <div class="card-content-area">

          <input type="text" id="matricula" name="matricula" value="" placeholder="Matrícula">

        </div>

        <div class="card-content-area">

          <input type="text" id="cpf" name="cpf" value="" placeholder="CPF">

        </div>

        <div class="card-content-area">

          <input type="text" id="nome" name="nome" value="" placeholder="Nome">

        </div>

        <div class="card-content-area">

          <input type="email" id="email" name="email" value="" placeholder="Email">

        </div>

        <div class="card-content-area">

            <input type="text" id="logradouro" name="logradouro" value="" placeholder="Logradouro"/>

        </div>

        <div class="card-content-area">

          <input type="text" id="numero" name="numero" autocomplete="off" placeholder="Número">

        </div>

        <div class="card-content-area">

          <input type="text" id="bairro" name="complemento" autocomplete="off" placeholder="Bairro">

        </div>

        <div class="card-content-area">

          <input type="text" id="cidade" autocomplete="off" placeholder="Cidade">

        </div>

        <div class="card-content-area">

          <input type="text" id="cep" autocomplete="off" placeholder="Cep">

        </div>

        <div class="card-content-area">

          <input type="text" id="complemento" name="complemento" autocomplete="off" placeholder="Complemento">

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

<?php

    include("../../model/database.php");
    include("../../model/Aluno.php");

    if (isset($_POST['action']) && $_POST['action'] == 'atualizarAluno') {
        $id = $_POST['id'];
        $matricula = $_POST['matricula'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $complemento = $_POST['complemento'];

        atualizarAluno($id, $matricula, $cpf, $nome, $email, $logradouro, $numero, $bairro,
            $cidade, $estado, $cep, $complemento);
    }

?>

<?php include('../footer.php') ?>