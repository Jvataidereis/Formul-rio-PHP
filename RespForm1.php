
<?php


//Recebendo os inputs do formulário com a variável $_POST

if(isset($_POST['submit']));
{
  //  print_r($_POST['nome']);
 //   echo '<br>';
  // print_r($_POST['senha']);
   // echo '<br>';
   // print_r($_POST['sexo']);
   // echo '<br>';
   // print_r($_POST['turno']);
   // echo '<br>';
   // print_r($_POST['cidade']);

require_once "pdo_conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];
$turno = $_POST['turno'];
$cidade = $_POST['cidade'];

//Conexão e seleção do banco de dados
$con = novaConexao();

//executa a consulta que insere os dados no banco
$query = "INSERT INTO ALUNO (
  nome, senha, sexo, turno, cidade)
 VALUES ('$nome', '$senha', '$sexo', '$turno', '$cidade')";
    
  $insert = $con->exec($query);
 if($insert) {
     echo "Aluno cadastrado com sucesso <br>";
 } else{
        echo "Erro";
   }

}



echo "Os dados recebidos do formulário são: <p>";
echo "
<table width = '400' border - '1' cellspacing = '0' cellpadding = '0'>
    <tr>
        <td width = '100'>Nome: <td>
        <td width = '300'>$nome</td>
    </tr>

    <tr>
    <td width = '100'>Senha: <td>
    <td width = '300'>$senha</td>
</tr>

<tr>
<td width = '100'>Sexo: <td>
<td width = '300'>$sexo</td>
</tr>

<tr>
<td width = '100'>Turno: <td>
<td width = '300'>$turno</td>
</tr>

<tr>
<td width = '100'>Cidade: <td>
<td width = '300'>$cidade</td>
</tr>
</table>
";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <p>

    <font face="Arial, Helvetica, sans-serif" size = "4">
        <a href = "index.php"> Clique aqui para voltar ao formulário.</a>
        </font>
        </p>
</body>
</html>