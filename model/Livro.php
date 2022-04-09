<?php

    function cadastrarLivro($isbn, $nome, $autor, $ano_publicacao){
        global $db;

        $count = 0;
        $query = "INSERT INTO livro (isbn, nome, fk_autor, ano_publicacao, status_ativo)
                VALUES (:isbn, :nome, :fk_autor, :ano_publicacao, 1)";

        $statement = $db->prepare($query);

        $statement->bindValue(':isbn', $isbn);
        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':fk_autor', $autor);
        $statement->bindValue(':ano_publicacao', $ano_publicacao);
        $count = $statement->execute();

        $dupesql = "SELECT * FROM livro where (isbn = '$isbn')";
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

    function atualizarLivro($id, $titulo, $autor, $stats){
        global $db;

        $count = 0;
        $query = "UPDATE livros SET titulo = :titulo, autor = :autor, stats = :stats WHERE id = :id";

        $statement = $db->prepare($query);
        $statement->bindValue(':titulo', $titulo);
        $statement->bindValue(':autor', $autor);
        $statement->bindValue(':stats', $stats);
        $statement->bindValue(':id', $id);
        $count = $statement->execute();
        $statement->closeCursor();

        return $count;
    }

    function pesquisarLivro($pesquisa){
        global $db;
        
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Titulo</th>";
        echo "<th>Autor</th>";
        
        echo "</tr>";

        //mostrar todos os livros em uma tabela
        $query = "SELECT * FROM livros WHERE titulo LIKE :pesquisa";
        $statement = $db->prepare($query);
        $statement->bindValue(':pesquisa', '%'.$pesquisa.'%');
        if ($statement->execute()) {
            $result = $statement->fetchAll();
        };
        $statement->closeCursor();

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['titulo'] . "</td>";
            echo "<td>" . $row['autor'] . "</td>";
            echo "</tr>";
        }
        
        return 0;
    }

    function excluirLivro($id){
        global $db;

        $count = 0;
        $query = "DELETE FROM livros WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $count = $statement->execute();
        $statement->closeCursor();

        return $count;
    }

    function listarLivros(){
        global $db;

        $query = "SELECT * FROM livros";
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
            $livros[] = array('id' => $row['id'], 'titulo' => $row['titulo'], 
                'autor' => $row['autor'], 'status' => $row['status']);
            echo "<TR>";
            echo "<TD>".$row['id']."</TD>";
            echo "<TD>".$row['status']."</TD>";
            echo "<TD>".$row['titulo']."</TD>";
            echo "<TD>".$row['autor']."</TD>";
            echo "</TR>";
        }

        return $result;
    }

    function totalAutor($autor){
        //operacao com o group by
        global $db;

        $count = 0;
        $query = "SELECT COUNT(*) FROM livros WHERE autor = :autor";
        $statement = $db->prepare($query);
        $statement->bindValue(':autor', $autor);
        if ($statement->execute()) {
            $count = $statement->fetchColumn();
        };
        $statement->closeCursor();
    
        echo "<h1>Total de livros de $autor: $count</h1>";
    
        return $count;
    
    }

    //quantos livros tem todos os autores
    function totalAutores(){
        global $db;

        $count = 0;
        $query = "SELECT autor, COUNT(autor) FROM livros group by autor";
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

        $query = "SELECT autor, COUNT(autor) FROM livros group by autor";
        $statement = $db->prepare($query);
        if ($statement->execute()) {
            $result = $statement->fetchAll();
        };
        $statement->closeCursor();

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['autor'] . "</td>";
            echo "<td>" . $row['COUNT(autor)'] . "</td>";
            echo "</tr>";
        }

        return $count;
    }

?>