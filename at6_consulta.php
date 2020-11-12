<?php
        include 'at6_header.php';
?>
<h1>Database</h1>
<form action="at6_pesquisa.php" method="POST">
    <h2>Consulta banco de dados</h2>
    <input type="text" name="pesquisa" placeholder="Consultar..." class="btt1">
        <p>
            <label for="consultaid">
            Consultar por ID <input type="radio" name="id" value="sim">S<input type="radio" name="id" value="nao" checked>N</p>
            <p>tabela ordem decrescente</label><input type="radio" name="decres" value="dec">S<input type="radio" name="decres" value="cre" checked>N

    <button type="submit" name="cons" class="botaoform1">Enviar</button>
</form>
<form action="at6_pesquisa.php" method="POST">
    <H2>Alteração dos dados no banco de dados</h2>
    <p>Alterar <input type="text" name ="valorNovo" placeholder="Dado a ser alterado" class="btt3">
    no ID <input type="number" name="valorVelho" placeholder="ID da alteração" class="btt3"></p><p class="p2"> Colouna
    <select name = "valorColuna" class="colunas">
        <option value="nome">Nome</option>
        <option value="endereco">Endereço</option>
        <option value="bairro">Bairro</option>
        <option value="cidade">Cidade</option>
        <option value="estado">Estado</option>
        <option value="telCel">Celular</option>
    </select></p>
    <button name="cons2" class="botaoform1">Enviar</button>
</form>
<form action="at6_pesquisa.php" method="POST">
    <h2>Deletar registro do banco de dados</h2>
    <p>ID do registro <input type="number" name="registroDeletar" placeholder="deletar..." class="btt4"></p>
    <button name="cons3" class="botaoform2">Enviar</button>
</form>
</body>
</html>