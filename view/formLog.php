
<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="/lib/view/styles/main.css">

  <title>Login</title>

</head>

<body>
  <section class="login-cadastro">

    <form class="card-login" action="." method="post">

      <div class="card-header">

        <h2>Fazer Login</h2>

      </div>

      <div class="card-content">
        
      <input type="hidden" name="action" value="login">

        <div class="card-login-area">

          <label for="usuario">Usuário</label>

          <input type="text" id="usuario" name="usuario">


        </div>

        <div class="card-login-area">

          <label for="password">Senha</label>

          <input type="password" id="senha" name="senha" autocomplete="off">

        </div>

      </div>

      <div class="card-footer">

        <input type="submit" value="Entrar" class="submit">

      </div>

    </form>

  </section>

</body>

</html>