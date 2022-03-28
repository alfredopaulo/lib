<?php 
    require('model/database.php'); 
    require('model/libra_db.php');

    $action = filter_input(INPUT_POST, 'action');

    $nome = filter_input(INPUT_POST, 'nome');
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = filter_input(INPUT_POST, "senha");
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
    $nivel = filter_input(INPUT_POST, 'nivel');

    


    if (!$action) {
        $action = filter_input(INPUT_GET, 'action');
        if (!$action) {
            $action = 'formLog';
        }
    }
   // echo $action; mostrar a variavel action
    echo "<br>";
    
    switch($action) {

        //mostrar a variavel action
      
       
            case 'cadastrar':
                $count = cadastrar($nome, $usuario, $senha, $email, $nivel, $logradouro, $numero, $bairro, $cidade, $estado, $cep,$complemento, $cpf, $nivel);
                if ($count > 0) {
                    $message = 'Usuário cadastrado com sucesso!';
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    $message = 'Não foi possível cadastrar o usuário!';
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                include('view/formCadastrar.php');
               // header("Location:view/formCadastrar.php");
              
                break;
            break;

            case 'deslogar':
                deslogar();
               // include('view/formLog.php');
                break;

            case 'login':        
                if (!empty($usuario) && !empty($senha)) {
                    $count = login($usuario, $senha);
                   // echo $count;
                    if ($count > 0) {

                        $message = 'Usuário logado com sucesso!';
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        //funcao para pegar o nivel do usuario
                        $nivel = getNivel($usuario);
                        //echo $nivel;
                        //funcao para pegar o nome do usuario
                        $nome = getNome($usuario);
                        //echo $nome;
                        //funcao para pegar o id do usuario
                        $id = getId($usuario);
                        //echo $id;

                        //criar sessao
                        session_start();
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['nivel'] = $nivel;
                        $_SESSION['nome'] = $nome;

                        

                        include('view/pagina_p.php');
                       // header("Location:view/pagina_p.php");
                    } else {
                        $error_message = 'Usuario ou senha invalidos';
                        include('view/formLog.php');
                        echo "<script type='text/javascript'>alert('$error_message');</script>";
                    }
                }else{
                    $error_message = 'Digite usuario e senha para logar';
                    include('view/formLog.php');
                    echo "<script type='text/javascript'>alert('$error_message');</script>";
                }
                break;
        case 'delete':
            if ($id) {
               // $count = delete_city($id);
                header("Location: .?deleted={$count}");
            } else {
                $error_message = 'Invalid city data. Check all fields and resubmit.';
                include('view/error.php');
            }
            break;
        default: 
            include('view/formLog.php');
    } 


        
   