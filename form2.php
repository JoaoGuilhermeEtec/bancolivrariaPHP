<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livraria</title>
</head>
<body>
    <h1>Consulta</h1>
 
    <form name="cadastro" method="GET" action="consulta2.php">

        <input type="checkbox" name="nome" value="name"> Nome

        <br><input type="checkbox" name="endereco" value="endereco"> Endereço

        <br><input type="checkbox" name="bairro" value="bairro"> Bairro

        <br><input type="checkbox" name="cidade" value="cidade"> Cidade

        <br><input type="checkbox" name="estado" value="estado"> Estado

        <br><input type="checkbox" name="telCel" value="telCel"> Numero de Celular
        <!--<p>Codigo</p>
        <input type="text" name="codigo">-->
        <br><br><input type="submit" value="consultar"> 
    </form>
</body>
</html>