<?php

   

if(isset($_SESSION['usuario'])){
   // echo $_SESSION['usuario'];
   // echo $_SESSION['nivel'];
    //echo $_SESSION['nome'];
   // echo $_SESSION['last_login_timestamp'];
   // session timed out
   // last request was more than 30 minutes ago
   session_unset();     // unset $_SESSION variable for the run-time 
   session_destroy();   // destroy session data in storage
   header("Location:/libra/");
}



?>