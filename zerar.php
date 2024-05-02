<?php
include 'db.php';

try {
    // Preparar a consulta SQL para truncar a tabela
    $query = "TRUNCATE TABLE queue";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    
    // Redirecionar para index.php?pagina=remover após a operação bem-sucedida
    header('location:index.php?pagina=remover');
    exit(); // Terminar a execução do script após o redirecionamento
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
