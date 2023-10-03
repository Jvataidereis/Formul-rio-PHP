<?php

function novaConexao() {
    $dns = 'mysql:host=localhost;dbname=joaodb';
    $usuario='root';
    $senha='';

    try {
        $conexao = new PDO($dns, $usuario, $senha);
        return $conexao;
    }catch(PDOException $e) {
        echo 'Código de Falha: '.$e->getCode();
    }
}




?>