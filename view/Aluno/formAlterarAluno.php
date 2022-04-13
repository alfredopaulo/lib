<!DOCTYPE html>

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

  <section class="login-cadastro">

    <form class="card-cadastro" action="../../index.php" method="post">

      <div class="card-header">

        <h2>Alterar Aluno</h2>

      </div>

      <input type="hidden" name="action" value="alterarAluno">

      <div class="search-content">
        <div class="search-area">

          <input type="text" id="matriculap" name="matriculap" value="" required placeholder="Pesquisar Matrícula">
          <input type="hidden" name="id" id="id">
        
        </div>
        <div class="search-area">

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

      <div class="card-content">
        <div class="card-cadastro-area">

          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" value="">

        </div>

        <div class="card-cadastro-area">

          <label for="matricula">Matrícula</label>
          <input type="text" id="matricula" name="matricula" value="">

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="">

        </div>

        <div class="card-cadastro-area">

          <label for="cpf">CPF</label>

          <input type="text" id="cpf" name="cpf" value="">

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="telefone">Telefone</label>
          <input type="text" id="telefone" name="telefone" value="">

        </div>

        <div class="card-cadastro-area">

          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" value="">

        </div>

        <div class="card-footer">

          <input type="submit" value="Cadastrar" class="submit">

        </div>

      </div>
      <div class="excluir">
        <a href="/lib/view/Aluno/excluirAluno.php">Excluir Aluno</a>
      </div>

    </form>

  </section>
  <footer>
    <P>LAWHACK</P>
    <P>2021-2022</P>
  </footer>

</body>

</html>
