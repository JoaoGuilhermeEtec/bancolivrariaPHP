<?php   
$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "db_livraria";

$conexao=mysqli_connect($localhost,$user_name,$senha,$db);
if(mysqli_error($conexao)){
    echo "<h2>erro na conexao!</h2>";
}
else{
    $sql = "INSERT INTO db_clientes (nome,endereco,bairro,cidade,estado,telCel) 
    VALUES ('Steve R Peralez','Edgewood Avenue','Fresno','California','CA','5592684454'),
    ('Emely K Reece','Edwards Street','Rock Mount','North Carolina','NC','2527745079'),
    ('John D Makowski','River Road','Colorado Springs','Colorado','CO','7193931032'),
    ('Robert K Davis','Evergreen Lane','Lone Tree','Iowa','IA','3235963047'),
    ('Dora M Butters','Swick Hill Street','New Orleans','Louisiana','LA','9852437103'),
    ('Shirley J Smith','goldcliff Circle','Washington','Washington DC','DC','2026242179')";

    if(mysqli_query($conexao,$sql)){
        echo "<h2>Cliente cadastrado com sucesso!</h2>";
    }
    else{
        echo "<h2>Erro ao inserir cliente! Erro: ".mysqli_error($conexao)."</h2>";
    }
}
mysqli_close($conexao);
?>