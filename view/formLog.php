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

        if($error != ""){
            echo '<p>'.$error.'</p>';
        }

        ?>

    
    </fieldset>