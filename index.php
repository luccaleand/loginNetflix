<?php session_start()



?>

<html>
  <head>
    <title>login de usuario</title>
  </head>
  <body>
    <?php

  if(!isset($_SESSION['login'])){
    if(isset($_POST['acao'])){
    //$login = 'luvadepedreiro';
        $login = 'um';
    //$senha = 'obrigadoDeus';
  $senha = 'dois';
  $loginform = $_POST['login'];
  $senhaform = $_POST['senha'];

  if($login == $loginform && $senha == $senhaform){
    //o usúario logará com sucesso
    $_SESSION['login'] = $login;
    header('location: index.php');
  
  } else{
    //algum erro
    echo 'Dados invalidos';
  }
    }
  include ('login.php');
}  else{
    if(isset($_GET['logout'])){
      unset($_SESSION['login']);
      session_destroy();
      header('location: index.php');
    }
    
    include('home.php');
}

  ?>     
  </body>
</html>