<?php
if (isset($_SESSION)) {
    session_start();    //reviver sessão
}
session_destroy();      //desfazer sessão
header("Location: index.php");  //redirecionar para página principal (login!)
?>