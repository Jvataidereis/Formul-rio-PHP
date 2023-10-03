<?php
require_once "pdo_conexao.php";

$query = 'create table if not exists Aluno (
    
    nome varchar(50)  not null,
    senha varchar(30) not null,
    sexo varchar(1) not null,
    turno varchar(10) not null,
    cidade varchar(30) not null)';

    $conexao = novaConexao();
    $retorno = $conexao->exec($query);




?>