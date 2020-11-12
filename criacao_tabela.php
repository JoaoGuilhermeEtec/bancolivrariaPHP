<?php 
$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "db_livraria";

$conexao = mysqli_connect($localhost,$user_name, $senha, $db);

$sql = "CREATE TABLE db_clientes(
    nome VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    telCel VARCHAR(15),
    codigo INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(codigo))";

if (mysqli_query($conexao,$sql)){
    echo "Tabela criada com sucesso!";
}
else{
    echo "Erro: ".mysqli_error($conexao);
}
mysqli_close($conexao);
    
?>