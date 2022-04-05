<?php 
    require('model/database.php'); 
    require('model/Autenticacao.php');
    require('model/Usuario.php');
    require('model/Livro.php');
    require('model/Aluno.php');
    require('model/Emprestimo.php');

    $action = filter_input(INPUT_POST, 'action');

    $GLOBALS['error'] = "";
    $error_message = null;

    $codigo = filter_input(INPUT_POST, 'codigo');

    if (!$action) {
        $action = filter_input(INPUT_GET, 'action');
        if (!$action) {
            $action = 'formLog';
        }
    }
    
    switch($action) {
        case 'login':   
            $usuario = filter_input(INPUT_POST, 'usuario');
            $senha = filter_input(INPUT_POST, "senha");     

            if (!empty($usuario) && !empty($senha)) {
                $count = login($usuario, $senha);
                if ($count > 0) {   
                    $_SESSION['usuario'] = $usuario;

                    $message = 'Usuário logado com sucesso!';
                    //funcao para pegar o nivel do usuario
                    $nivel = getNivel($usuario);
                    //funcao para pegar o nome do usuario
                    $nome = getNome($usuario);
                    //funcao para pegar o id do usuario
                    $id = getId($usuario);
                    
                    include('view/pagina_p.php');
                } else {     
                    $error = 'Usuario ou senha invalidos';

                    header('location:index.php');
                    include('view/formLog.php');
                }
            }else{
              $error = 'Digite usuario e senha para logar';
                include('view/formLog.php');
              //  echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
        break;

        case 'deslogar':
            deslogar();
            // include('view/formLog.php');
        break;

        case 'cadastrarUsuario':
            $nome = filter_input(INPUT_POST, 'nome');
            $usuario = filter_input(INPUT_POST, 'usuario');
            $senha = filter_input(INPUT_POST, 'senha');
            $email = filter_input(INPUT_POST, "email");
            $nivel = filter_input(INPUT_POST, 'nivel');
            $ativo = filter_input(INPUT_POST, 'ativo');
            $logradouro = filter_input(INPUT_POST, 'logradouro');
            $numero = filter_input(INPUT_POST, 'numero');
            $complemento = filter_input(INPUT_POST, 'complemento');
            $bairro = filter_input(INPUT_POST, 'bairro');
            $cep = filter_input(INPUT_POST, 'cep');
            $cidade = filter_input(INPUT_POST, 'cidade');
            $uf = filter_input(INPUT_POST, 'uf');
            $cpf = filter_input(INPUT_POST, 'cpf');

            $count = cadastrarUsuario($nome, $usuario, $senha, $email, $nivel, $ativo,
                $logradouro, $numero, $complemento, $bairro, $cep, $cidade, $uf, $cpf);
            
            if ($count > 0) {
                $message = 'Usuário cadastrado com sucesso!';
            } else {
                $message = 'Não foi possível cadastrar o usuário!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            include('view/Usuario/formCadastrar.php');
        break;

        case 'cadastrarAluno':
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
            include('view/Aluno/formCadastrarAluno.php');

        break;
        
        case 'cadastrarLivro':
            $titulo = filter_input(INPUT_POST, 'titulo');
            $autor = filter_input(INPUT_POST, 'autor');
            $status = filter_input(INPUT_POST, 'status');

            $count = cadastrarLivro($titulo, $autor, $status);

            if($count > 0){
                $error_message  = 'Livro cadastrado com sucesso!';
            }else{
                $error_message   = 'Não foi possível cadastrar o livro!';
            }
            echo $error_message;

            include('view/Livro/formCadastrarLivro.php');
        break;
        
        case 'listarLivros':
            //botao para voltar uma pagina anterior
            echo "<input type='button' value='voltar' onclick='history.go(-1)'>";
            listarLivros();
        break;

        case 'excluirLivro':
            $result = excluirLivro($codigo);
            
            if($result>0){
                $message = 'Livro excluido com sucesso!';
            }else{
                $message = 'Não foi possível excluir o livro!';
            }
            echo $message;
        break;

        case 'cadastrarEmprestimo':
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
            include('view/Emprestimo/formCadastrarEmprestimo.php');

        break;
        
        case 'listarEmprestimos':
            //botao para voltar uma pagina anterior
            echo "<input type='button' value='voltar' onclick='history.go(-1)'>";
            listarEmprestimos();
        break;

        default: 
            include('view/formLog.php');
    } 

?>
