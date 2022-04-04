<?php 
    require('model/database.php'); 
    require('model/libra_db.php');
    require('model/Aluno.php');
    require('model/Emprestimo.php');

    $action = filter_input(INPUT_POST, 'action');

    $nome = filter_input(INPUT_POST, 'nome');
 
    $email = filter_input(INPUT_POST, "email");
    $nivel = filter_input(INPUT_POST, 'nivel');
    $logradouro = filter_input(INPUT_POST, 'logradouro');
    $complemento = filter_input(INPUT_POST, 'complemento');
    $numero = filter_input(INPUT_POST, 'numero');
    $bairro = filter_input(INPUT_POST, 'bairro');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $estado = filter_input(INPUT_POST, 'estado');
    $cep = filter_input(INPUT_POST, 'cep');
    $cpf = filter_input(INPUT_POST, 'cpf');
    //$nivel = filter_input(INPUT_POST, 'nivel');

    $titulo = filter_input(INPUT_POST, 'titulo');
    $autor = filter_input(INPUT_POST, 'autor');
    $stats = filter_input(INPUT_POST, 'stats');


    $GLOBALS['error'] = "";
    $error_message = null;


    $codigo = filter_input(INPUT_POST, 'codigo');


    


    if (!$action) {
        $action = filter_input(INPUT_GET, 'action');
        if (!$action) {
            $action = 'formLog';
        }
    }
   // echo $action; mostrar a variavel action
    echo "<br>";
    echo $action;
    
    switch($action) {

        //mmostrar a variavel action
     
      
       
            case 'cadastrar':
                $count = cadastrar($nome, $usuario, $senha, $email, $nivel, $logradouro, $numero, $bairro, $cidade, $estado, $cep,$complemento, $cpf);
                if ($count > 0) {
                    $message = 'Usuário cadastrado com sucesso!';
                } else {
                    $message = 'Não foi possível cadastrar o usuário!';
                }
                echo "<script type='text/javascript'>alert('$message');</script>";
                include('view/formCadastrar.php');
               // header("Location:view/formCadastrar.php");break;
            break;

            case 'listarLivros':

                //botao para voltar uma pagina anterior
                echo "<input type='button' value='voltar' onclick='history.go(-1)'>";
                listarLivros();
            break;

            case 'deslogar':
                deslogar();
               // include('view/formLog.php');
                break;
            case 'excluirLivro':
              //  echo $codigo;
              //  $id = filter_input(INPUT_GET, 'id');
              //mostrar os livros cadastrados
                $result = excluirLivro($codigo);
                echo $result;

                
                if($result>0){
                    $message = 'Livro excluido com sucesso!';
                //$result = listarLivros();
                }else{
                    $message = 'Não foi possível excluir o livro!';
                }
                echo $message;
                 //listarLivros();
                 //listarLivros();
        

                 //include('view/excluirLivro.php');

                // header("http://localhost/libra/view/excluirLivro.php");



                break;

            case 'cadastrarLivro':
                $count = cadastrarLivro($titulo, $autor, $stats);
                if ($count > 0) {
                    $error_message  = 'Livro cadastrado com sucesso!';
                } else {
                    $error_message   = 'Não foi possível cadastrar o livro!';
                }

                echo $error_message;

           // include('view/error.php');
            include('view/formCadastrarLivro.php');
           // header("Location:view/formCadastrarLivro.php");
  

                break;

            case 'login':   
                $usuario = filter_input(INPUT_POST, 'usuario');
                $senha = filter_input(INPUT_POST, "senha");     


                if (!empty($usuario) && !empty($senha)) {
                    
                    $count = login($usuario, $senha);
                    if ($count > 0) {
                       
                     $_SESSION['usuario'] = $usuario;

                        $message = 'Usuário logado com sucesso!';
                      //  echo "<script type='text/javascript'>alert('$message');</script>";
                        //funcao para pegar o nivel do usuario
                        $nivel = getNivel($usuario);
                        //echo $nivel;
                        //funcao para pegar o nome do usuario
                        $nome = getNome($usuario);
                        //echo $nome;
                        //funcao para pegar o id do usuario
                        $id = getId($usuario);

                        
                        include('view/pagina_p.php');
                       // header("Location:view/pagina_p.php");
                    } else {     
                        $error = 'Usuario ou senha invalidos';
                     //   unset ($_SESSION['usuario']);
                      //  unset ($_SESSION['nivel']);

                        header('location:index.php');
                        include('view/formLog.php');
                      //  echo "<script type='text/javascript'>alert('$error_message');</script>";
                    }
                }else{
                  $error = 'Digite usuario e senha para logar';
                    include('view/formLog.php');
                  //  echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
                break;
        
        
        case 'cadastrar_aluno':
            $matricula_aluno = filter_input(INPUT_POST, 'matricula');
            $cpf_aluno = filter_input(INPUT_POST, 'cpf');
            $nome_aluno = filter_input(INPUT_POST, 'nome');
            $email_aluno = filter_input(INPUT_POST, "email");
            $logradouro_aluno = filter_input(INPUT_POST, 'logradouro');
            $numero_aluno = filter_input(INPUT_POST, 'numero');
            $bairro_aluno = filter_input(INPUT_POST, 'bairro');
            $cidade_aluno = filter_input(INPUT_POST, 'cidade');
            $estado_aluno = filter_input(INPUT_POST, 'estado');
            $cep_aluno = filter_input(INPUT_POST, 'cep');
            $complemento_aluno = filter_input(INPUT_POST, 'complemento');
            
            $count = cadastrarAluno($matricula_aluno, $cpf_aluno, $nome_aluno,
                $email_aluno, $logradouro_aluno, $numero_aluno, $bairro_aluno,
                $cidade_aluno, $estado_aluno, $cep_aluno, $complemento_aluno);
            
            if($count > 0){
                $message = 'Aluno cadastrado com sucesso!';
            }else{
                $message = 'Não foi possível cadastrar o aluno!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            include('view/formCadastrarAluno.php');

            break;

        case 'cadastrar_emprestimo':
            $id_aluno_emprestimo = filter_input(INPUT_POST, 'id_aluno');
            $data_emprestimo_emprestimo = filter_input(INPUT_POST, 'data_emprestimo');
            $data_devolucao_emprestimo = filter_input(INPUT_POST, 'data_devolucao');
            
            $count = cadastrarEmprestimo($id_aluno_emprestimo, $data_emprestimo_emprestimo,
                $data_devolucao_emprestimo);
            
            if($count > 0){
                $message = 'Emprestimo cadastrado com sucesso!';
            }else{
                $message = 'Não foi possível cadastrar emprestimo!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            include('view/formCadastrarEmprestimo.php');

            break;

        default: 
            include('view/formLog.php');
    } 


        
   