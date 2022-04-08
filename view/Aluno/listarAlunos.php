
<table border='1'>
<tr>
<th>Código</th>
<th>Matricula</th>
<th>CPF</th>
<th>Nome</th>
<th>Email</th>
<th>Logradouro</th>
<th>Numero</th>
<th>Bairro</th>
<th>Cidade</th>
<th>Estado</th>
<th>CEP</th>
<th>Complemento</th>

<TR>

<?php
    include_once('../../model/database.php');
    include_once('../../model/Aluno.php');

    $result = listarAlunos();

    // mostrar os livros no html
    $livros = array();
    foreach ($result as $row) {
        $livros[] = array('id' => $row['id'], 'matricula' => $row['matricula'], 
            'cpf' => $row['cpf'], 'nome' => $row['nome'], 'email' => $row['email'],
            'logradouro' => $row['logradouro'], 'numero' => $row['numero'],
            'bairro' => $row['bairro'], 'cidade' => $row['cidade'], 'estado' => $row['estado'],
            'cep' => $row['cep'], 'complemento' => $row['complemento']);

        echo "<TR>";
        echo "<TD>".$row['id']."</TD>";
        echo "<TD>".$row['matricula']."</TD>";
        echo "<TD>".$row['cpf']."</TD>";
        echo "<TD>".$row['nome']."</TD>";
        echo "<TD>".$row['email']."</TD>";
        echo "<TD>".$row['logradouro']."</TD>";
        echo "<TD>".$row['numero']."</TD>";
        echo "<TD>".$row['bairro']."</TD>";
        echo "<TD>".$row['cidade']."</TD>";
        echo "<TD>".$row['estado']."</TD>";
        echo "<TD>".$row['cep']."</TD>";
        echo "<TD>".$row['complemento']."</TD>";
    }

    echo('<input type="button" value="Voltar" onclick="history.go(-1)">');

?>
</TR>