<?php


class Usuarios extends Controller{



    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }

    public function cadastrar(){

        $formulario = filter_input_array(INPUT_POST);

     var_dump($formulario);


        if(isset($formulario)){
           // echo 'clicou';
          //  echo $_POST['email'];

            $dados = [
                'nome' => trim($formulario['nome']),
                'usuario' => trim($formulario['usuario']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'senha1' => trim($formulario['senha1']),
                'nivel' => trim($formulario['nivel']),
                'ativo' => trim($formulario['ativo']),
                'logradouro' => trim($formulario['logradouro']),
                'numero' => trim($formulario['numero']),
                'complemento' => trim($formulario['complemento']),
                'bairro' => trim($formulario['bairro']),
                'cep' => trim($formulario['cep']),
                'cidade' => trim($formulario['cidade']),
                'uf' => trim($formulario['uf']),
                'cpf' => trim($formulario['cpf']),
            ];

            if(empty($formulario['nome'])){
               $dados['nome_erro'] = 'Preencha o campo nome';
            }

            if(empty($formulario['email'])){
                $dados['email_erro'] = 'Preencha o campo email';
            }

            if(empty($formulario['senha'])){
                $dados['senha_erro'] = 'Preencha o campo senha';
            }

            if(empty($formulario['senha1'])){
                $dados['senha1_erro'] = 'Preencha o campo senha';
            }

            //confirmar senha
            if($formulario['senha'] != $formulario['senha1']){
                $dados['senha_erro'] = 'As senhas não conferem';
            }







            if(!in_array("",$formulario)){
                if($this->usuarioModel->armazenar($dados)){
                    echo 'Usuario inserido com sucesso !';
    
                }else{
                    die("Erro ao cadastrar !");
                }
                //echo "Dados ok";
            }


           // var_dump($formulario);

 
        }else{
            $dados = [

                'nome' => '',
                'usuario' => '',
                'email' => '',
                'senha' => '',
                'senha1' => '',
                'nivel' => '',
                'ativo' => '',
                'logradouro' => '',
                'numero' => '',
                'complemento' => '',
                'bairro' => '',
                'cep' => '',
                'cidade' => '',
                'uf' => '',
                'cpf' => '',


            ];


                }

        $this->view('usuarios/cadastrar',$dados);
    }


    public function login(){
      
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($formulario)){

            $dados = [
                'usuario' => trim($formulario['usuario']),
                'senha' => trim($formulario['senha']),
            ];

    
            if(empty($formulario['senha'])){
                $dados['senha_erro'] = 'Preencha o campo senha';
            }

         


            $usuario = $this->usuarioModel->logar($formulario['usuario'],$formulario['senha']);

            if($usuario){
               // var_dump($usuario);
               $this->CriarSessaoUsuario($usuario);
                 //echo 'Usuario logado com sucesso !';
            }else{
                Sessao::mensagem('usuario','Usuario ou senha incorretos','alert alert-danger');
            }	
            


        }else{
            $dados = [

                'usuario' => '',
                'senha' => '',

            ];
}
    
            $this->view('usuarios/login',$dados);
        }

        public function cadastrarLivro(){

            $formulario = filter_input_array(INPUT_POST);

            if(isset($formulario)){
                // echo 'clicou';
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
                    if($this->usuarioModel->cadastrarLivro($dados)){
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

           // echo "oi";
            $this->view('usuarios/cadastrarLivro',$dados);
        }


        private function CriarSessaoUsuario($usuario){
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['usuario'];
            $_SESSION['usuario_email'] = $usuario['email'];
           // $_SESSION['usuario_senha'] = $usuario['senha'];

           URL::redirect('paginas/home');

        }


        public function logout(){
            unset($_SESSION['usuario_id']);
            unset($_SESSION['usuario_nome']);
            unset($_SESSION['usuario_email']);
          //  unset($_SESSION['usuario_senha']);
            session_destroy();
            URL::redirect('paginas/login');
        }
}


?>