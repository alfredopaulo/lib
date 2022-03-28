<a href="./view/formCadastrar.php">cadastrar</a>
<a href="/libra/">login</a>





<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['usuario'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: /libra/"); exit;
}

//botao para deslogar 
echo "<a href='./view/logout.php'>Deslogar</a>";


?>

<h1>Página restrita</h1>
<p>Olá, <?php echo $_SESSION['usuario']; ?>!</p>

