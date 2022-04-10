<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="/lib/view/styles/main.css">

  <title>Cadastrar</title>

</head>

<body>
  <?php include_once('../header.php') ?>

  <section class="login-cadastro">

    <form class="card-cadastro" action="../../index.php" method="post">

      <div class="card-header">

        <h2>Fazer Cadastro</h2>

      </div>

      <input type="hidden" name="action" value="cadastrarUsuario">
      
      <div class="card-content">
        <div class="card-cadastro-area">

          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="usuario">úsuario</label>
          <input type="text" id="usuario" name="usuario" value="" required>

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="email">Email</label>
          <input type="text" id="email" name="email" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="nome">Senha</label>
          <input type="text" id="senha" name="senha" value="" required>

        </div>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="cpf">CPF</label>
          <input type="text" id="cpf" name="cpf" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" value="" required>

      </div>

      <div class="card-content">

        <div class="card-cadastro-area">

          <label for="telefone">Telefone</label>
          <input type="text" id="telefone" name="telefone" value="" required>

        </div>

        <div class="card-cadastro-area">

          <label for="nivel">Nível</label>
          <input type="text" id="nivel" name="nivel" value="" required>
          <!-- <select id="nivel">
            <option value="1" selected="selected">
              <span>Bibliotecario</span>
            </option>
            <option value="0">
              <span>Adminitrador</span>
            </option>
          </select> -->

        </div>

      </div>

        <div class="card-footer">

          <input type="submit" value="Entrar" class="submit">

        </div>
      </div>

    </form>

  </section>

  <?php include_once('../footer.php') ?>

</body>

</html>