<?php


class Livro{
    private $pdo;


    public function __construct()
    {
        $this->pdo = new Database;
    }

    public function cadastrarLivro($dados){
        $this->pdo->query("INSERT INTO livros (titulo, autor, stats)
VALUES (:titulo, :autor, :stats)");

            
            
            $this->pdo->bind("titulo",$dados['titulo']);
            $this->pdo->bind("autor",$dados['autor']);
            $this->pdo->bind("stats",$dados['stats']);


            if($this->pdo->executa()){
                return true;
            }else{
                return false;
            }
        }
    





}




?>