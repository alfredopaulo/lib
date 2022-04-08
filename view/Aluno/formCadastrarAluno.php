<!-- <html>
    <form action="../../index.php" method="post">
        <fieldset>
            <legend>Cadastrar Aluno</legend>
            <input type="hidden" name="action" value="cadastrarAluno">

            <label for="matricula">Matricula</label>
            <input type="text" id="matricula" name="matricula" value=""/>

            <label for "cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="" />

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="" />

            <label  for="email">Email:</label>
            <input type="email" id="email" name="email" value="" />

            <label for "logradouro">Logradouro: </label>
            <input type="text" id="logradouro" name="logradouro" value="" />
            
            <label for "numero">Número:</label>
            <input type="text" id="numero" name="numero" value="" />

            <label for "bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="" />
            
            <label for "cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="" />
            
            <label for "estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="" />

            <label for "cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="" />
            
            <label for "complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" value="" />
            
            <input type="submit" value="cadastrar" />
            <input  type="reset" value="Limpar" />
            <input type="button" value="Voltar" onclick="history.go(-1)">
        </fieldset>
    </form>
</html> -->


<!DOCTYPE html>

<head>

<link rel="stylesheet" href="/libra/view/styles.css">

  <title>Cadastrar Aluno</title>

</head>

<body>
  <div id="cadastrar">

    <form class="card" action="../../index.php" method="post">

      <div class="card-header">

        <h2>Fazer Cadastro</h2>

      </div>

      <div class="card-content">
        <input type="hidden" name="action" value="cadastrarAluno">

        <div class="card-content-area">
            <input type="text" id="matricula" name="matricula" value="" placeholder="Matrícula"/>
        </div>

        <div class="card-content-area">
            <input type="text" id="cpf" name="cpf" value="" placeholder="CPF"/>
        </div>

        <div class="card-content-area">
            <input type="text" id="nome" name="nome" value="" placeholder="Nome"/>
        </div>
        
        <div class="card-content-area">
            <input type="email" id="email" name="email" value="" placeholder="Email"/>
        </div>

        <div class="card-content-area"> 
            <input type="text" id="logradouro" name="logradouro" value="" placeholder="Logradouro"/>
            <div class="card-content-area"> 
            
        <div class="card-content-area"> 
            <input type="text" id="numero" name="numero" value="" placeholder="Número"/>
        </div>
        
        <div class="card-content-area">        
            <input type="text" id="bairro" name="bairro" value="" placeholder="Bairro"/>
        </div>
        
        <div class="card-content-area"> 
            <input type="text" id="cidade" name="cidade" value="" placeholder="Cidade"/>
        </div>

        <div class="card-content-area"> 
            <input type="text" id="estado" name="estado" value="" placeholder="Estado"/>
        </div>

        <div class="card-content-area"> 
            <input type="text" id="cep" name="cep" value="" placeholder="Cep"/>
        </div> 

        <div class="card-content-area">    
            <input type="text" id="complemento" name="complemento" value="" placeholder="Complemento"/>
        </div>

      </div>

      <div class="card-footer">

        <input type="submit" value="cadastrar">

      </div>
      <div class="card-footer">

        <input type="button" value="Voltar" onclick="history.go(-1)">

      </div>

    </form>

  </div>

</body>

</html>