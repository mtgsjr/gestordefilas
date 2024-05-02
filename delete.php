<?php
include 'db.php';
$registro = $_GET['id'];

try {
    // Preparar a consulta SQL para excluir o registro
    $query = "DELETE FROM queue WHERE registro = :registro";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':registro', $registro, PDO::PARAM_INT);
    $stmt->execute();
    
    // Redirecionar para index.php?pagina=remover após a exclusão bem-sucedida
    header('location:index.php?pagina=remover');
    exit(); // Terminar a execução do script após o redirecionamento
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
