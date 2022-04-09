<?php


class Livro extends Controller{

    public function __construct()
    {
        $this->livrosModel = $this->model('Livro');
    }

    public function cadastrarLivro(){
        var_dump($_POST);

        $formulario = filter_input_array(INPUT_POST);

        if(isset($formulario)){
            echo 'clicou';
            // echo $_POST['email'];

            $dados = [
                'titulo' => trim($formulario['titulo']),
                'autor' => trim($formulario['autor']),
                'stats' => trim($formulario['stats']),
            ];

            if(empty($formulario['titulo'])){
                $dados['titulo_erro'] = 'Preencha o campo titulo';
            }

            if(empty($formulario['autor'])){
                $dados['autor_erro'] = 'Preencha o campo autor';
            }

            if(empty($formulario['status'])){
                $dados['status_erro'] = 'Preencha o campo status';
            }


            

            if(!in_array("",$formulario)){
                if($this->livrosModel->cadastrarLivro($dados)){
                   // Sessao::mensagem('livro','Livro inserido com sucesso !','alert alert-danger');
                   echo "<p>Livro inserido com sucesso !</p>";
                }else{
                  
                    //Sessao::mensagem('livro','Erro ao cadastrar !','alert alert-danger');
                    echo "<p>Livro inserido com sucesso !</p>";
                }
                //echo "Dados ok";
            }

           
        }else{
            $dados = [

                'titulo' => '',
                'autor' => '',
                'stats' => '',

            ];
        }

       echo "oi";
        $this->view('livros/cadastrarLivro',$dados);
    }



    
}


?>