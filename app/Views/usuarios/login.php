<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php 

if(isset($_SESSION['usuario'])){
    Sessao::mensagem('usuario');
}

?>
<form method="POST"name="login"action="<?= URL ?>/usuarios/login" enctype="multipart/form-data">
    <fieldset>


        
        <legend>Login</legend>
        
        <input type="hidden" name="action" value="login">
        
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" value="" required />
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="" required />
        
        <input type="submit" value="Login" />
        <input  type="reset" value="Limpar" />

    </form>
    

    


    
</body>
</html>