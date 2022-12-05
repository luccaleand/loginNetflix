<?php

///A primeira tela que o usuário vai ver após logar

echo '<h2>bem-vindo ' .$_SESSION['login'].'</h2>';
echo '<a href ="?logout" sair </a>';

//echo '<a href="?logout">Sair!</a> ';

?>