HEADER



<!--
<li>  <a href="<?= URL ?>/paginas/home">HOME </a></li>
<li>  <a href="<?= URL ?>/usuarios/cadastrar">CADASTRE-SE</a></li>



-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_SESSION['usuario_id'])){
    echo "Olá, ".$_SESSION['usuario_nome']." !";
    //
    echo "<a href='".URL."/usuarios/logout'>Sair</a>";

}else{
   echo "Não está logado";
   //URL::redirect('paginas/login');
   


}

?>
    
</body>
</html>




