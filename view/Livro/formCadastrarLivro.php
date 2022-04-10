
<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="/lib/view/styles/main.css">

  <title>Cadastrar</title>

</head>

<body>
  <header>
    <!-- Centered link -->
    <div class="centered">
      <a href="home.html">Lib 3.11</a>
    </div>

    <!-- Left-aligned links (default) -->
    <input type="button" value="Voltar" onclick="history.go(-1)">

    <!-- Right-aligned links -->
    <div class="right">
      <a href="login.html">Sair</a>
    </div>
  </header>

  <section class="login-cadastro">

    <form class="card-login" action="../../index.php" method="POST">

      <div class="card-header">

        <h2>Cadastro Livros</h2>

      </div>
      <div class="card-content">
        <input type="hidden" name="action" value="cadastrarLivro">
        <div class="card-login-area">

          <label for="nome">Nome do Livro</label>
          <input type="text" id="nome" name="nome" required>

        </div>

        <div class="card-login-area">

          <label for="id_autor">Autor</label>
          <input type="text" id="id_autor" name="id_autor" value="" required>

        </div>


        <div class="card-login-area">

          <label for="isbn">ISBN</label>
          <input type="text" id="isbn" name="isbn" value="" required>

        </div>

        <div class="card-login-area">

          <label for="ano_publicacao">Ano de Publicação</label>
          <input type="text" id="ano_publicacao" name="ano_publicacao" value="" required>

        </div>

      </div>

      <div class="card-footer">

        <input type="submit" value="Entrar" class="submit" required>

      </div>
      </div>

    </form>

  </section>
  <footer>
    <p>LAWHACK - (2021-2022)</p>
  </footer>

</body>

</html>