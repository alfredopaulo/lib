<header>
  <?php ?>
  <!-- Centered link -->
  <div class="centered">
    <a href="../view/pagina_p.php">Lib 3.11</a>
  </div>

  <!-- Left-aligned links (default) -->
  <input type="button" value="Voltar" onclick="history.go(-1)">

  <!-- Right-aligned links -->
  <div class="right">
    <form action="../index.php" method="post">
      <input type="hidden" name="action" value="sair">
      <input type="submit" value="Sair">
    </form>
    <!-- <a href="login.html">Sair</a> -->
  </div>
</header>