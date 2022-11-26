<?php
include('conectar.php'); //linkando php no html

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha seu senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $mysqli->query($sql_code) or die("Falha do código SQL!" . $mysqli->error);
        if($result->num_rows == 1) {
            $usuario = $result->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: prime.php");
        } else {
            echo "Usuário não encontrado!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">  <!--linkando css no html-->
    <script type="text/Javascript" src="nossojs.js"></script> <!--linkando Js no html-->
</head>

<body>
<div>
    <h1>Faça Login!</h1>
    </div>
    <div>
        <form action="" method="POST">  <!--método POST-->
            <div>
                <label>E-mail</label>
                <input type="text" name="email">
            </div>
            <div>
                <label>Senha</label>
                <input type="senha" name="senha">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
    <p>Não possui uma conta? <a href="cadastro.html">Criar Conta!</a></p>
</body>
</html>