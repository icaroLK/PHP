<?php

$q = "Select usuario, nome, senha, tipo from usuarios where usuario='". $_SESSION['user']. "'";


$busca = $banco->query($q);
$objAtual = $busca->fetch_object();





?>








<h1>Atualizando dados</h1>

<form action="user-edit.php" method="post">
    <table>
        <tr>
            <label for="usuario">Usuário: </label>
            <input type="text" name="usuario" id="iusuario" maxlength="10" required value="<?php echo $objAtual->usuario?>" readonly style="background-color: lightgrey;">
        </tr>
        <tr>
            <td>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="inome" maxlength="30" required value="<?php echo $objAtual->nome?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="tipo">Tipo de conta:</label>
                <input type="text" name="tipo" id="itipo" readonly value="<?php echo $objAtual->tipo?>" style="background-color: lightgrey;">

            </td>
        </tr>
        <tr>
            <td>
                <label for="senha1">Senha Atual: </label>
                <input type="password" name="senha1" id="senha1" required size="8" maxlength="8">
            </td>
        </tr>
        <tr>
            <td>
                <label for="senha2">Nova senha: </label>
                <input type="password" name="senha2" id="senha2" size="8" maxlength="8">
            </td>
        </tr>
        <tr>
            <td>
                <label for="senha3">Confirmar nova senha: </label>
                <input type="password" name="senha3" id="senha3" size="8" maxlength="8">
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" value="Salvar">
            </td>
        </tr>
    </table>
    

</form>


