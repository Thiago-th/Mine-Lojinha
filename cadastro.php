<?php
include("conectar.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];

$result_usuarios = "INSERT INTO usuarios (nome, email, senha, celular, telefone) 
VALUES ('$nome', '$email', '$senha', $celular, $telefone)";
//$resultado_usuarios = mysqli_query($mysqli, $result_usuarios);
if(mysqli_query($mysqli, $result_usuarios)) {
    echo "Conta criada com sucesso!";
    echo "<br>";
    echo "Faça <a href='index.php'>Login!</a>";
} else {
    echo "Algo deu errado! Preecnha todos os campos!".mysqli_connect_error($mysqli);
    echo "<br>";
    echo "<p><a href='cadastro.html'>Voltar!</a></p>";
}
mysqli_close($mysqli);
?>