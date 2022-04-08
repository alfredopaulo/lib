<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form  method="POST"name="cadastrar"
    action="<?= URL ?>/usuarios/cadastrar" enctype="multipart/form-data" >
    <h1>Cadastre-se</h1>
    <fieldset>
            <legend>Cadastrar</legend>
            <input type="hidden" name="action" value="cadastrarUsuario">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="" />

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" value="" />
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="" />
            
            <label for="senha">Confirmar Senha:</label>
            <input type="password" id="senha" name="senha1" value="" />
            
            <label  for="email">Email:</label>
            <input type="email" id="email" name="email" value="" />
            
            <label for="nivel">Nivel:</label>
            <input type="text" id="nivel" name="nivel" value="" />
            
            <label for="ativo">Ativo:</label>
            <input type="text" id="ativo" name="ativo" value="" />

            <label for="logradouro">Logradouro: </label>
            <input type="text" id="logradouro" name="logradouro" value="" />
            
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" value="" />
            
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" value="" />
            
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="" />
            
            <label for "cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="" />


            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="" />
            
            <label for="uf">UF:</label>
            <input type="text" id="uf" name="uf" value="" />
            
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="" />
            
            <input type="submit" value="armazenar" />
            <input  type="reset" value="Limpar" />
            <?php
             echo "<a href='".URL. "/paginas/home'>Voltar 2</a>";

            ?>
           
           
        </fieldset>



    </form> 
    </table >
    </form >


    
</body>
</html>