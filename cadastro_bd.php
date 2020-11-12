<?php
$localhost = "localhost";
$user = "root";
$senha = "";
$db = "db_livraria";

$conexao = mysqli_connect($localhost,$user,$senha,$db);

if(mysqli_connect_errno($conexao)){
    echo "Erro ao tentar se conectar com o banco de dados! Erro: ".mysqli_connect_error();
}

else{
    $result = mysqli_query($conexao,"SELECT * FROM db_clientes");
    $num_rows = mysqli_num_rows($result);
    $id = $num_rows + 1;
    $sql = "INSERT INTO db_clientes VALUES('$_POST[nome]','$_POST[endereco]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[telcel]',$id)";


    if(mysqli_query($conexao,$sql)){
        echo "Cliente cadastrado com sucesso!";
    }
    else{
        echo "Erro ao inserir cliente! Erro: ".mysqli_error($conexao);
    }

    mysqli_close($conexao);

}

?>

