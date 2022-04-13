<!DOCTYPE html>
<?php

use JetBrains\PhpStorm\ArrayShape;

  include('../../model/database.php');
  include('../../model/Aluno.php');

  $menssage;

  $action = filter_input(INPUT_POST, 'actionn');

  if (isset($_POST['actionn']) && $_POST['actionn'] == 'search') {
    $matricula = $_POST['matriculap'];
    $dados_aluno = pesquisarAluno($matricula);
    // var_dump($dados_aluno);
    // echo($dados_aluno[0]["nome"]);

    if(!$dados_aluno){
      $menssage = "Aluno não encontrado";
    } else{
      $menssage = "";
    }
  }

?>
<head>

  <link rel="stylesheet" href="/lib/view/styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Cadastrar</title>

</head>

<body>
  <header>
    <!-- Centered link -->
    <div class="centered">
      <a href="../view/pagina_p.php">Lib 3.11</a>
    </div>

    <!-- Left-aligned links (default) -->
    <input type="button" value="Voltar" onclick="history.go(-1)">

    <!-- Right-aligned links -->
    <div class="right">
      <a href="login.html">Sair</a>
    </div>
  </header>
<h3 style="color: #ffffff;">
  <?php 
    echo($menssage);
  ?>
</h3>
  <section class="login-cadastro">
    <div class="card-cadastro">
      <div class="card-header">

        <h2>Alterar Aluno</h2>

      </div>

      <form action="./formAlterarAluno.php"  method="post">
        <div class="search-content">
            <div class="search-area">

              <input type="text" id="matriculap" name="matriculap" value="" required placeholder="Pesquisar Matrícula">
            
            </div>
            <div class="search-area">

                <input type="hidden" name="actionn" value="search">
                <button id="search" type="submit"><i class="fa fa-search"></i></button>
                      
            </div>
          
            <style>
              .search-content{
                display: flex;
                flex-direction: row;
              }
              .search-area input {
                width: 349px;
                padding: 15px;
                box-sizing: border-box;
                background-color: #272323;
                border-radius: 10px;
                border-style: none;
                color: #ffffff;
                font-size: 90%;
                margin-bottom: 10px;
                margin-right: 5px;
              }
              #search {
                cursor: pointer;
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 30px;
                padding-right: 30px;
                width: 100%;
                background-color: #b61d1d;
                border-radius: 10px;
                border-style: none;
                color: #ffffff;
                font-size: 90%;
                border-style: none;
                cursor: pointer;
                font-weight: bold;
              }
            </style>

          </div>
        </form>  

      <form  action="../../index.php" method="post">

        <input type="hidden" name="action" value="alterarAluno">
        <input type="hidden" name="id" id="id" value="<?php echo($dados_aluno[0]["id"]); ?>"> 

        <div class="card-content">
          <div class="card-cadastro-area">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo($dados_aluno[0]["nome"]); ?>">
          </div>

          <div class="card-cadastro-area">

            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" value="<?php echo($dados_aluno[0]["matricula"]); ?>">

          </div>

        </div>

        <div class="card-content">

          <div class="card-cadastro-area">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo($dados_aluno[0]["email"]); ?>">

          </div>

          <div class="card-cadastro-area">

            <label for="cpf">CPF</label>

            <input type="text" id="cpf" name="cpf" value="<?php echo($dados_aluno[0]["cpf"]); ?>">

          </div>

        </div>

        <div class="card-content">

          <div class="card-cadastro-area">

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo($dados_aluno[0]["telefone"]); ?>">

          </div>

          <div class="card-cadastro-area">

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="<?php echo($dados_aluno[0]["endereco"]); ?>">

          </div>

          <div class="card-footer">

            <input type="submit" value="Cadastrar" class="submit">

          </div>

        </div>
        <div class="excluir">
          <a href="/lib/view/Aluno/excluirAluno.php">Excluir Aluno</a>
        </div>

      </form>
    </div>
  </section>
  <footer>
    <P>LAWHACK</P>
    <P>2021-2022</P>
  </footer>

</body>

</html>
