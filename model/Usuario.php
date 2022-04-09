<?php

    function cadastrarUsuario($nome, $usuario, $senha, $email, $nivel, $ativo,
            $logradouro, $numero, $complemento, $bairro, $cep, $cidade, $uf, $cpf){

        global $db;
        $count = 0;
    
        $query = "INSERT INTO usuarios (nome, usuario, senha, email, nivel, 
                        ativo, logradouro, numero, complemento, bairro, cep, cidade, uf, cpf)
                VALUES (:nome, :usuario, :senha, :email, :nivel, :ativo, :logradouro, 
                        :numero, :complemento, :bairro, :cep, :cidade, :uf, :cpf)";
        
        $statement = $db->prepare($query);

        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':usuario', $usuario);
        $statement->bindValue(':senha', $senha);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':nivel', $nivel);
        $statement->bindValue(':ativo', $ativo);
        $statement->bindValue(':logradouro', $logradouro);
        $statement->bindValue(':numero', $numero);
        $statement->bindValue(':complemento', $complemento);
        $statement->bindValue(':bairro', $bairro);
        $statement->bindValue(':cep', $cep);
        $statement->bindValue(':cidade', $cidade);
        $statement->bindValue(':uf', $uf);
        $statement->bindValue(':cpf', $cpf);

        $count = $statement->execute();

        $dupesql = "SELECT * FROM usuarios where (usuario = '$usuario')";
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

    function getNivel($usuario){
        global $db; 
        $nivel = 0;
        $query = "SELECT nivel FROM usuario WHERE usuario = :usuario";

        $statement = $db->prepare($query);
        $statement->bindValue(':usuario', $usuario);
        if ($statement->execute()) {
            $nivel = $statement->fetchColumn();
        };
        $statement->closeCursor();
        
        return $nivel;
    }

    function getNome($usuario){
        global $db; 
        $nome = 0;
        $query = "SELECT nome FROM usuario WHERE usuario = :usuario";

        $statement = $db->prepare($query);
        $statement->bindValue(':usuario', $usuario);
        if ($statement->execute()) {
            $nome = $statement->fetchColumn();
        };
        $statement->closeCursor();
        return $nome;
    }

    function getId($usuario){
        global $db; 
        $id = 0;
        $query = "SELECT id FROM usuario WHERE usuario = :usuario";

        $statement = $db->prepare($query);
        $statement->bindValue(':usuario', $usuario);
        if ($statement->execute()) {
            $id = $statement->fetchColumn();
        };
        $statement->closeCursor();
        return $id;
    }

?>