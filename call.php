<?php
include 'db.php';
$registro = $_GET['id'];

// Preparando a consulta SQL com um espaço reservado (:registro) para evitar SQL injection
$query = "UPDATE queue SET status=true WHERE registro=:registro";

try {
    // Preparando a declaração
    $stmt = $conexao->prepare($query);
    
    // Ligando os parâmetros
    $stmt->bindParam(':registro', $registro, PDO::PARAM_INT);
    
    // Executando a consulta
    $stmt->execute();
    
    // Redirecionando para a página index.php?pagina=chamar
    header('location:index.php?pagina=chamar');
    exit();
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
}
?>
