
<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="/libra/view/styles.css">

  <title>Login</title>

</head>

<body>
  <div id="login">
    <form class="card" action="." method="post">

      <div class="card-header">

        <h2>Fazer Login</h2>

      </div>

      <div class="card-content">

        <div class="card-content-area">

          <input type="hidden" name="action" value="login">
          <input type="text" id="usuario" name="usuario" placeholder="Usuario" />

        </div>

        <div class="card-content-area">

          <input type="password" id="senha" name="senha" autocomplete="off" placeholder="Senha" />

        </div>

      </div>
      
      <div class="card-footer">

        <input type="submit" value="Entrar" class="submit">

      </div>
      <?php

      //se a global de erro nao estiver vazia mostra a mensagem de erro
        if ($GLOBALS["error"] != "") {
            echo '<p>'.$GLOBALS["error"] .'</p>';
        }

      ?>
    </form>

  </div>

</body>

</html>