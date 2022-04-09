

<!DOCTYPE html>

<head>

<link rel="stylesheet" href="/libra/view/styles.css">

  <title>Cadastro Aluno</title>

</head>

<body>
  <div id="cadastrar">

    <form class="card" action="../../index.php" method="post">

      <div class="card-header">

        <h2>Cadastro Aluno</h2>

      </div>

      <div class="card-content">
        <input type="hidden" name="action" value="cadastrarAluno">

        <div class="card-content-area">
            <input type="text" id="cpf" name="cpf" value="" placeholder="CPF"/>
        </div>

        <div class="card-content-area">
            <input type="text" id="matricula" name="matricula" value="" placeholder="Matrícula"/>
        </div>

        <div class="card-content-area">
            <input type="text" id="nome" name="nome" value="" placeholder="Nome"/>
        </div>
        
        <div class="card-content-area">
            <input type="email" id="email" name="email" value="" placeholder="Email"/>
        </div>

        <div class="card-content-area"> 
            <input type="text" id="telefone" name="telefone" value="" placeholder="Telefone"/>
        </div class="card-content-area"> 
            
        <div class="card-content-area"> 
            <input type="text" id="endereco" name="endereco" value="" placeholder="Endereço"/>
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