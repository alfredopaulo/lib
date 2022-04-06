
<?php
    include('../../model/database.php');
    include('../../model/Aluno.php');

    $result = listarAlunos();

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Matricula</th>";
    echo "<th>CPF</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Logradouro</th>";
    echo "<th>Numero</th>";
    echo "<th>Bairro</th>";
    echo "<th>Cidade</th>";
    echo "<th>Estado</th>";
    echo "<th>CEP</th>";
    echo "<th>Complemento</th>";

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
        echo "</TR>";
    }

    echo('<input type="button" value="Voltar" onclick="history.go(-1)">');

?>
