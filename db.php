<?php
$banco = 'kiwi';
$host = 'localhost';
$usuario = 'root';
$senha = '';
date_default_timezone_set('America/Recife');

try {
    $conexao = new PDO("mysql:dbname=$banco;host=$host;charset=utf8", $usuario, $senha);
    // Setando o modo de erro do PDO para lançar exceções em caso de erro
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Retornando a conexão após o bloco try-catch
    return $conexao;
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados! " . $e->getMessage();
    // Em caso de erro, retornando false ou lançando uma exceção, dependendo do contexto do seu código
    // return false;
    // throw new Exception("Erro ao conectar com o banco de dados! " . $e->getMessage());
}
?>