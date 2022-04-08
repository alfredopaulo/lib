<?php


class Usuario {
    private $pdo;


    public function __construct()
    {
        $this->pdo = new Database;
    }


    public function armazenar($dados){
        $this->pdo->query("INSERT INTO usuarios (nome, usuario, senha, email, nivel, 
        ativo, logradouro, numero, complemento, bairro, cep, cidade, uf, cpf)
VALUES (:nome, :usuario, :senha, :email, :nivel, :ativo, :logradouro, 
        :numero, :complemento, :bairro, :cep, :cidade, :uf, :cpf)");

        
        
        $this->pdo->bind("nome",$dados['nome']);
        $this->pdo->bind("usuario",$dados['usuario']);
        $this->pdo->bind("senha",$dados['senha']);
        $this->pdo->bind("email",$dados['email']);
        $this->pdo->bind("nivel",$dados['nivel']);
        $this->pdo->bind("ativo",$dados['ativo']);
        $this->pdo->bind("logradouro",$dados['logradouro']);
        $this->pdo->bind("numero",$dados['numero']);
        $this->pdo->bind("complemento",$dados['complemento']);
        $this->pdo->bind("bairro",$dados['bairro']);
        $this->pdo->bind("cep",$dados['cep']);
        $this->pdo->bind("cidade",$dados['cidade']);
        $this->pdo->bind("uf",$dados['uf']);
        $this->pdo->bind("cpf",$dados['cpf']);
  


        if($this->pdo->executa()){
            return true;
        }else{
            return false;
        }
    }

    public function logar($usuario , $senha){
        $this->pdo->query("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha");
        $this->pdo->bind("usuario",$usuario);
        $this->pdo->bind("senha",$senha);


        if($this->pdo->resultado()){
            $resultado = $this->pdo->resultado();
            if($resultado['senha'] == $senha){
                return $resultado;
            }else{
                return false;
            }
        }else{
            return false;
        }

    

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
    

    //funcao para cadastrar livro

    
}

    

?>