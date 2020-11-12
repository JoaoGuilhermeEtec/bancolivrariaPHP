<?php
include 'at6_header.php';
?>
    <h1>Livraria</h1>
    <h2>Cadastro de Clientes</h2>
    <form name="cadastro_bd" method="POST" action="cadastro_bd.php">
        <p>Nome</p>
        <input type="text" name="nome" class="btt2">
        <p>Endereço</p>
        <input type="text" name="endereco" class="btt2">
        <p>Bairro</p>
        <input type="text" name="bairro" class="btt2">
        <p>Cidade</p>
        <input type="text" name="cidade" class="btt2">
        <p>Estado</p>
        <input type="text" name="estado" class="btt2">
        <p>Numero de Celular</p>
        <input type="text" name="telcel" class="btt2">
        <br><br><input type="submit" value="Enviar" class="botaoform1">
    </form>
    
</body>
</html>