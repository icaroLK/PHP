<h1>Novo usuário</h1>

<form action="user-new.php" method="post">
    <table>
        <tr>
            <label for="usuario">Usuário: </label>
            <input type="text" name="usuario" id="iusuario" maxlength="10" required>
        </tr>
        <tr>
            <td>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="inome" maxlength="30" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tipo">Selecione o tipo de conta</label>
                <select name="tipo" id="itipo">
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" required size="8" maxlength="8">
            </td>
        </tr>
        <tr>
            <td>
                <label for="senha2">Confirme sua senha: </label>
                <input type="password" name="senha2" id="senha2" required size="8" maxlength="8">
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" value="Salvar">
            </td>
        </tr>
    </table>
    

    <!-- <label for="usuario">Nome: </label>
    <input type="text" name="usuario" id="iusuario" maxlength="40" required> -->

    <!-- <label for="senha">Senha: </label>
    <input type="password" name="senha" id="senha" required> -->

    <!-- <input type="submit" value="Enviar"> -->




</form>


