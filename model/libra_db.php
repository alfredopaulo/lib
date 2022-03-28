<?php


function login($usuario, $senha){
    global $db; 
    $count = 0;
  //  echo $usuario;
  //  echo $senha;
    $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";

    $statement = $db->prepare($query);
    $statement->bindValue(':usuario', $usuario);
    $statement->bindValue(':senha', $senha);
    if ($statement->execute()) {
        $count = $statement->rowCount();
    };
    $statement->closeCursor();
    return $count;
}


function getNivel($usuario){
    global $db; 
    $nivel = 0;
    $query = "SELECT nivel FROM usuarios WHERE usuario = :usuario";

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
    $query = "SELECT nome FROM usuarios WHERE usuario = :usuario";

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
    $query = "SELECT id FROM usuarios WHERE usuario = :usuario";

    $statement = $db->prepare($query);
    $statement->bindValue(':usuario', $usuario);
    if ($statement->execute()) {
        $id = $statement->fetchColumn();
    };
    $statement->closeCursor();
    return $id;
}



function deslogar(){
    session_destroy();
    header("Location:/libra/");
}

function cadastrar($nome, $usuario, $senha, $email, $nivel, $logradouro, $numero, $bairro, $cidade, $estado, $cep,$complemento, $cpf){
    global $db;
   // $link = mysqli_connect("localhost", "root", "", "integracao");
    $count = 0;
  
    $query = "INSERT INTO usuarios (nome, usuario, senha, email, nivel, logradouro, numero, bairro, cidade, estado, cep,complemento, cpf)
              VALUES (:nome, :usuario, :senha, :email, :nivel, :logradouro, :numero, :bairro, :cidade, :estado, :cep,:complemento, :cpf)";
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':usuario', $usuario);
    $statement->bindValue(':senha', $senha);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':nivel', $nivel);
    $statement->bindValue(':logradouro', $logradouro);
    $statement->bindValue(':numero', $numero);
    $statement->bindValue(':bairro', $bairro);
    $statement->bindValue(':cidade', $cidade);
    $statement->bindValue(':estado', $estado);
    $statement->bindValue(':cpf', $cpf);
    $statement->bindValue(':nivel', $nivel);
    $statement->bindValue(':complemento', $complemento);
    $statement->bindValue(':cep', $cep);
   $count = $statement->execute();
   // $statement->closeCursor();

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


?>