<form action="." method="post">
    <fieldset>
        <legend>Login</legend>
        <input type="hidden" name="action" value="login">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" value="" />
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="" />
        <input type="submit" value="login" />
        <input  type="reset" value="Limpar" />


        <?php

      //se a global de erro nao estiver vazia mostra a mensagem de erro
        if ($GLOBALS["error"] != "") {
            echo '<p>'.$GLOBALS["error"] .'</p>';
        }

        ?>

    
    </fieldset>