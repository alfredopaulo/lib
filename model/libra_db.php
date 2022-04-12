<?php


function login($usuario, $senha){
    global $db; 
    $count = 0;
  
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


function listarLivros(){
    global $db;
    $query = "SELECT * FROM livro";
    $result = $db->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Status</th>";
    echo "<th>Título</th>";
    echo "<th>Autor</th>";
  


    //mostrar os livros no html
    $livros = array();
    foreach ($result as $row) {
        $livros[] = array('id' => $row['id'], 'titulo' => $row['titulo'], 'autor' => $row['autor'], 'stats' => $row['stats']);
        echo "<TR>";
        echo "<TD>".$row['id']."</TD>";
        echo "<TD>".$row['stats']."</TD>";
        echo "<TD>".$row['titulo']."</TD>";
        echo "<TD>".$row['autor']."</TD>";
        echo "</TR>";
    }
    //echo "oiiiiiiiiiiiiiiii";

    return $result;
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

function cadastrarLivro($titulo, $autor, $stats){
    global $db;
    $count = 0;
    $query = "INSERT INTO livro (titulo, autor, stats)
              VALUES (:titulo, :autor, :stats)";
    $statement = $db->prepare($query);
    $statement->bindValue(':titulo', $titulo);
    $statement->bindValue(':autor', $autor);
    $statement->bindValue(':stats', $stats);
    $count = $statement->execute();
    $statement->closeCursor();

    return $count;
}


function excluirLivro($id){


    global $db;
    $count = 0;
        $query = "DELETE FROM livro WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $count = $statement->execute();
        $statement->closeCursor();

   

    return $count;
}


function atualizarLivro($id, $titulo, $autor, $stats){
    global $db;
    $count = 0;
    $query = "UPDATE livro SET titulo = :titulo, autor = :autor, stats = :stats WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':titulo', $titulo);
    $statement->bindValue(':autor', $autor);
    $statement->bindValue(':stats', $stats);
    $statement->bindValue(':id', $id);
    $count = $statement->execute();
    //verificar se ocorreu algum erro



    $statement->closeCursor();

    return $count;
}


function totalAutor($autor){
   //operacao com o group by
    global $db;
    $count = 0;
    $query = "SELECT COUNT(*) FROM livro WHERE nome = :nome";
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $autor);
    if ($statement->execute()) {
        $count = $statement->fetchColumn();
    };
    $statement->closeCursor();


    echo "<h1>Total de livros de $autor: $count</h1>";


echo "<br> oiiiiiiiiiii";


    return $count;

}

//quantos livros tem todos os autores
function totalAutores(){
    global $db;
    $count = 0;
    $query = "SELECT a.nome, COUNT(a.nome) FROM livro as l join autor as a group by a.nome";
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $count = $statement->fetchColumn();
    };
    $statement->closeCursor();

   //mostrar a tabela com  todos os autores com a qunaatidade de livros
    echo "<h1>Total de livros de todos os autores: $count</h1>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Autor</th>";
    echo "<th>Quantidade de livros</th>";
    echo "</tr>";

    $query = "SELECT nome, COUNT(nome) FROM livro group by nome";
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $result = $statement->fetchAll();
    };
    $statement->closeCursor();

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['COUNT(nome)'] . "</td>";
        echo "</tr>";
    }
   

    

    return $count;
}


function pesquisarLivro($pesquisa){
    global $db;
    $count = 0;
    

    $query = "SELECT * FROM livro WHERE titulo LIKE :pesquisa UNION SELECT * FROM livros WHERE autor LIKE :pesquisa";
   // $query = "SELECT * FROM livros WHERE titulo LIKE :pesquisa";
    $statement = $db->prepare($query);
    $statement->bindValue(':pesquisa', '%'.$pesquisa.'%');
    if ($statement->execute()) {
        $count = $statement->fetchColumn();
    };
    $statement->closeCursor();

    //mostrar os livros que foram encontrados
    echo "<h1>Total de livros encontrados: $count</h1>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Titulo</th>";
    echo "<th>Autor</th>";
    
    echo "</tr>";

    //mostrar todos os livros em uma tabela
    $query = "SELECT * FROM livro WHERE titulo LIKE :pesquisa UNION SELECT * FROM livro WHERE nome LIKE :pesquisa";
   // $query = "SELECT * FROM livros WHERE titulo LIKE :pesquisa";
    $statement = $db->prepare($query);
    $statement->bindValue(':pesquisa', '%'.$pesquisa.'%');
    if ($statement->execute()) {
        $result = $statement->fetchAll();
    };
    $statement->closeCursor();

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "</tr>";
    }
    return $count;

}


    




?>