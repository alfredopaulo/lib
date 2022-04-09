
<table border='1'>
<tr>
<th>Código</th>
<th>CPF</th>
<th>Matricula</th>
<th>Nome</th>
<th>Email</th>
<th>Telefone</th>
<th>Endereco</th>

<TR>

<?php
    include_once('../../model/database.php');
    include_once('../../model/Aluno.php');

    $result = listarAlunos();

    // mostrar os livros no html
    foreach ($result as $row) {

        echo "<TR>";
        echo "<TD>".$row['id']."</TD>";
        echo "<TD>".$row['cpf']."</TD>";
        echo "<TD>".$row['matricula']."</TD>";
        echo "<TD>".$row['nome']."</TD>";
        echo "<TD>".$row['email']."</TD>";
        echo "<TD>".$row['telefone']."</TD>";
        echo "<TD>".$row['endereco']."</TD>";
    }

    echo('<input type="button" value="Voltar" onclick="history.go(-1)">');

?>
</TR>