<?php

    function cadastrarEmprestimo($id_aluno, $data_emprestimo, $data_devolucao){

        global $db;

        $count = 0;
    
        $query = "INSERT INTO emprestimo (id_aluno, data_emprestimo, data_devolucao)
                VALUES (:id_aluno, :data_emprestimo, :data_devolucao)";

        $statement = $db->prepare($query);

        $statement->bindValue(':id_aluno', $id_aluno);
        $statement->bindValue(':data_emprestimo', $data_emprestimo);
        $statement->bindValue(':data_devolucao', $data_devolucao);

        $count = $statement->execute();

        $dupesql = "SELECT * FROM emprestimo where (data_emprestimo = '$data_emprestimo')";
        $duperow = $db->query($dupesql);
        $dupecount = $duperow->rowCount();
        if ($dupecount == 0) {
            if ($statement->execute()) {
                $count = $statement->rowCount();
            };
        }

        $statement->closeCursor();
        return $count;
    }

    function listarEmprestimos(){
        global $db;

        $query =    "SELECT a.id, a.nome, e.data_emprestimo, e.data_devolucao
                    FROM aluno AS a
                    INNER JOIN emprestimo AS e ON a.id = e.id_aluno";
        $result = $db->query($query);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID Aluno</th>";
        echo "<th>Nome Aluno</th>";
        echo "<th>Data Emprestimo</th>";
        echo "<th>Data Devolucao</th>";

        //mostrar os emprestimos no html
        $emprestimos = array();
        foreach ($result as $row) {
            $emprestimos[] = array('id' => $row['id'], 'nome' =>$row['nome'],
                'data_emprestimo' => $row['data_emprestimo'], 'data_devolucao' => $row['data_devolucao']);
            echo "<TR>";
            echo "<TD>".$row['id']."</TD>";
            echo "<TD>".$row['nome']."</TD>";
            echo "<TD>".$row['data_emprestimo']."</TD>";
            echo "<TD>".$row['data_devolucao']."</TD>";
            echo "</TR>";
        }

        return $result;
    }

?>