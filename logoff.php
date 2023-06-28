<?php 
    session_start();
    session_destroy();
    header('Location: index.php'); 

    //remover índices do array de sessão
    //unset()

    //destrui a variável de sessão
    //session_destroy()


?>