<br>
<a href="./view/formCadastrar.php">cadastrar</a>
<br>
<a href="/libra/">login</a>
<br>




<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['usuario'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: /libra/"); exit;
}

//echo "<a href='./view/logout.php'>Deslogar</a>";

?>

<html>

<form action="." method="post">
        <input type="hidden" name="action" value="deslogar">
        <input type="submit" value="deslogar" />
</html>



<h1>Página restrita</h1>
<p>Olá, <?php echo $_SESSION['usuario']; ?>!</p>

