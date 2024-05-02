<?php
# Conecta com a base de dados
include 'db.php';

if ($_POST['nome'] != '') {
    try {
        $nomedocliente = $_POST['nome'];
        
        // Preparar a consulta SQL para inserir o nome do cliente
        $query = "INSERT INTO queue (nome) VALUES (:nomedocliente)";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':nomedocliente', $nomedocliente, PDO::PARAM_STR);
        $stmt->execute();
        
        // Redirecionar para index.php?pagina=chamar após a inserção bem-sucedida
        header('location:index.php?pagina=chamar');
        exit(); // Terminar a execução do script após o redirecionamento
    } catch (PDOException $e) {
        // Em caso de erro, exibir mensagem de erro
        echo "Erro ao executar a consulta: " . $e->getMessage();
        exit(); // Terminar a execução do script
    }
} else {
    // Se o nome estiver vazio, redirecionar para index.php?pagina=chamar
    header('location:index.php?pagina=chamar');
    exit(); // Terminar a execução do script
}
?>
