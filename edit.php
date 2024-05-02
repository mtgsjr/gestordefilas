<?php
# Conecta com a base de dados
include 'db.php';
$id = $_POST['id'];
$nomedocliente = $_POST['nome'];

try {
    // Preparar a consulta SQL para atualizar o nome do cliente
    $query = "UPDATE queue SET nome = :nome WHERE registro = :id";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':nome', $nomedocliente, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Redirecionar para index.php?pagina=chamar após a atualização bem-sucedida
    header('location:index.php?pagina=chamar');
    exit(); // Terminar a execução do script após o redirecionamento
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
