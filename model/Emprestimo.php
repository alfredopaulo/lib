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

?>