<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form name="form1" method="post" action="RespForm1.php">
        <p> Nome: <br>
        <input type="text" name="nome" id="nome" size = "30" maxlength="30"></p>
        <p> Senha: <br>
        <input type="password" name="senha" id="senha" size="10" maxlength="30"> </p>
        <p> Sexo: <br>
        <input type="radio" name="sexo" value="Masculino"> Masculino
        <input type="radio" name="sexo" value="Masculino"> Feminino </p>
        <p> Selecione o turno: <br>
        <input type="checkbox" name="turno" id="turno" value="Manhã"> Manhã
        <input type="checkbox" name="turno" id="turno" value="Manhã"> Tarde
        <input type="checkbox" name="turno" id="turno" value="Manhã"> Noite </p>
        <p> Cidade: <br>
        <select name="cidade" id="cidade">
            <option value="Vazio"></option>
            <option value="Salvador">Salvador, BA</option>
            <option value="Rio de Janeiro">Rio de Janeiro, RJ</option>
            <option value="São Paulo">São Paulo, SP</option>
            <option value="Brasília">Brasília, DF</option>
            <option value="Maceió">Maceió, AL</option>
</select>
</p>
<p><input type="submit" value="Enviar"></p>
<input type='hidden' name="btnOK' value='1'>
</form>


</body>
</html>