<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="/lib/view/styles/main.css">

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

        <h2>Cadastro Aluno</h2>

      </div>

      <input type="hidden" name="action" value="cadastrarAluno">

      <div class="card-content">
        <div class="card-cadastro-area">

          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="matricula">Matrícula</label>
          <input type="text" id="matricula" name="matricula" value="" required>

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="cpf">CPF</label>

          <input type="text" id="cpf" name="cpf" value="" required>

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="telefone">Telefone</label>
          <input type="text" id="telefone" name="telefone" value="">

        </div>

        <div class="card-cadastro-area">

          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" value="" required>

        </div>

        <div class="card-footer">

          <input type="submit" value="Cadastrar" class="submit">

        </div>

      </div>

    </form>

  </section>
  <footer>
    <P>LAWHACK</P>
    <P>2021-2022</P>
  </footer>

</body>

</html>