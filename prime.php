<?php
if(!isset($_SESSION)) {
    session_start();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
    <link rel="stylesheet" href="style.css" type="text/css"> <!--   linkando css no html    --> 
    <script type="text/Javascript" src="nossojs.js"></script> <!--  linkando Js no html     --> 
</head>
<body>
    <h1>Bem vindo!</h1>                       <!--  da pra colocar o nome do usuario com a tag
                                                    <php echo $_SESSION['nome']; >                  -->
    <p><a href="logout.php">Deslogar</a></p>  <!--  redireciona para outro arquivo e desfaz sessão  -->
    <a href="cadastroitens">Cadastrar itens</a>
</body>
</html>