<center><h3>EDITAR O NOME DO CLIENTE</h3></center>
<br></br>
<?php
include 'db.php';
$id = $_GET['id'];

try {
    // Selecionar o nome do cliente com base no ID fornecido
    $query = "SELECT nome FROM queue WHERE registro = :id";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar se o cliente foi encontrado
    if ($linha) {
        $nome = $linha['nome'];
    } else {
        echo "Cliente não encontrado.";
        exit(); // Terminar a execução do script
    }
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
<form method="POST" action="edit.php">
    <label><h5>Alterar nome do cliente</h5></label>
    <input type="hidden" name="id" placeholder="id" value="<?php echo htmlspecialchars($id); ?>">
    <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="submit" class="btn btn-success" value="Editar">
</form>

