<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'cafedb';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error) {
    die("Falha na conexão com o banco de dados: " . $mysqli->error);
}