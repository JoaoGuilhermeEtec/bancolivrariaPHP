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

        <p><input type="checkbox" name="nome" value="name"> Nome</p>

        <p><input type="checkbox" name="endereco" value="endereco"> Endereço</p>

        <p><input type="checkbox" name="bairro" value="bairro"> Bairro</p>

        <p><input type="checkbox" name="cidade" value="cidade"> Cidade</p>

        <p><input type="checkbox" name="estado" value="estado"> Estado</p>

        <p><input type="checkbox" name="telCel" value="telCel"> Numero de Celular</p>
    
        <button type="submit" value="consultar">Consultar</button>
    </form>
</body>
</html>