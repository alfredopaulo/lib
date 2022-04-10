<?php 
    require_once('model/database.php'); 
    require_once('model/Autenticacao.php');
    require_once('model/Usuario.php');
    require_once('model/Livro.php');
    require_once('model/Aluno.php');
    require_once('model/Emprestimo.php');

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
                  //  session_start();
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

        case 'sair':
            deslogar();
            include('view/formLog.php');
        break;

        case 'cadastrarUsuario':
            $nome = filter_input(INPUT_POST, 'nome');
            $usuario = filter_input(INPUT_POST, 'usuario');
            $senha = filter_input(INPUT_POST, 'senha');
            $email = filter_input(INPUT_POST, 'email');
            $nivel = filter_input(INPUT_POST, 'nivel');
            $endereco = filter_input(INPUT_POST, 'endereco');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $telefone = filter_input(INPUT_POST, 'telefone');

            $count = cadastrarUsuario($nome, $usuario, $senha, $email, $nivel, $endereco, $cpf, $telefone);
            
            if ($count > 0) {
                $message = 'Usuário cadastrado com sucesso!';
            } else {
                $message = 'Não foi possível cadastrar o usuário!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            include('view/Usuario/formCadastrar.php');
        break;

        case 'cadastrarAluno':
            $nome = filter_input(INPUT_POST, 'nome');
            $matricula = filter_input(INPUT_POST, 'matricula');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $endereco = filter_input(INPUT_POST, 'endereco');
            $cpf = filter_input(INPUT_POST, 'cpf');
            
            $count = cadastrarAluno($nome, $matricula,
                $email, $telefone, $endereco, $cpf);
            
            if($count > 0){
                $message = 'Aluno cadastrado com sucesso!';
            }else{
                $message = 'Não foi possível cadastrar o aluno!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            include('view/Aluno/formCadastrarAluno.php');

        break;
        
        case 'cadastrarLivro':
            $nome_livro = filter_input(INPUT_POST, 'nome');
            $autor_livro = filter_input(INPUT_POST, 'id_autor');
            $isbn = filter_input(INPUT_POST, 'isbn');
            $ano_publicacao = filter_input(INPUT_POST, 'ano_publicacao');

            $count = cadastrarLivro($nome_livro, $autor_livro, $isbn, $ano_publicacao);

            if($count > 0){
                $error_message  = 'Livro cadastrado com sucesso!';
            }else{
                $error_message   = 'Não foi possível cadastrar o livro!';
            }
            echo "<script type='text/javascript'>alert('$message');</script>";

            include('view/Livro/formCadastrarLivro.php');
        break;

        case 'alterarAluno':
            $id = filter_input(INPUT_POST, 'id');
            $cpf_aluno = filter_input(INPUT_POST, 'cpf');
            $matricula_aluno = filter_input(INPUT_POST, 'matricula');
            $nome_aluno = filter_input(INPUT_POST, 'nome');
            $email_aluno = filter_input(INPUT_POST, "email");
            $telefone_aluno = filter_input(INPUT_POST, 'telefone');
            $endereco_aluno = filter_input(INPUT_POST, 'endereco');

            atualizarAluno($id, $cpf_aluno, $matricula_aluno, $nome_aluno,
                $email_aluno, $telefone_aluno, $endereco_aluno);
            
            include_once('view/Aluno/formAlterarAluno.php');
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

        case 'excluirAluno':
            $id = filter_input(INPUT_POST, 'id');
            $codigo = $_POST['codigo'];
            desativarAluno($codigo);
            include_once('view/Aluno/excluirAluno.php');
            include_once('view/Aluno/listarAlunos.php');

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
            header('Location: ./view/formLog.php');
    } 

?>
