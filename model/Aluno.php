<?php

use LDAP\Result;

    function cadastrarAluno($nome, $matricula, $email, $telefone, $endereco, $cpf){

        global $db;
        $count = 0;
    
        $query = "INSERT INTO aluno (nome, matricula, email, telefone, endereco, cpf,
                    status_pendencia, status_ativo)
                VALUES (:nome, :matricula, :email, :telefone, :endereco, :cpf, 0, 1)";

        $statement = $db->prepare($query);

        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':matricula', $matricula);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':telefone', $telefone);
        $statement->bindValue(':endereco', $endereco);
        $statement->bindValue(':cpf', $cpf);

        $count = $statement->execute();

        $dupesql = "SELECT * FROM aluno where (matricula = '$matricula')";
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

    function atualizarAluno($id, $cpf, $matricula, $nome, $email, $telefone, $endereco){
        global $db;
        
        $count = 0;
        $query = "UPDATE aluno SET cpf = :cpf, matricula = :matricula, nome = :nome,
                    email = :email, telefone = :telefone, endereco = :endereco
                    WHERE id = :id";

        $statement = $db->prepare($query);

        $statement->bindValue(':cpf', $cpf);
        $statement->bindValue(':matricula', $matricula);
        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':telefone', $telefone);
        $statement->bindValue(':endereco', $endereco);
        $statement->bindValue(':id', $id);

        $count = $statement->execute();
        
        $statement->closeCursor();

        return $count;
    }

    function listarAlunos(){
        global $db;

        $query = "SELECT * FROM aluno WHERE status_ativo = 1";
        $result = $db->query($query);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        return $result;
    }

    function desativarAluno($id){
        global $db;

        $count = 0;
        $query = "UPDATE aluno SET status_ativo = 0
                  WHERE id = :id";
        
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        
        $count = $statement->execute();
        $statement->closeCursor();

        return $count;
    }

    function pesquisarAluno($matricula){
        global $db;

        $query = "SELECT * FROM aluno WHERE status_ativo = 1 AND matricula = :matricula";

        $statement = $db->prepare($query);

        $statement->bindValue(':matricula', $matricula);

        if ($statement->execute()) {
            $result = $statement->fetchAll();
        };
        $statement->closeCursor();

        return $result;
    }

?>