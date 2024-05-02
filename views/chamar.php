<center><h3>FILA DE ATENDIMENTO</h3></center>
<?php
// Selecionar registros da fila com status=0
$query = "SELECT registro, nome FROM queue WHERE status=0";
try {
    // Preparar e executar a consulta
    $stmt = $conexao->query($query);
    $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
<a class="btn btn-success" href="?pagina=adicionar">Inserir na fila</a>
<table class="table table-over table-striped" id="tabela">
    <thead>
        <tr>
            <th>Registro</th>
            <th>Nome do Cliente</th>
            <th>Editar</th>
            <th>Chamar Cliente da fila</th>
        </tr>
    </thead>
    <tbody>
<?php
// Loop pelos resultados da consulta
foreach ($fila as $linha) {
    echo '<tr><td>' . htmlspecialchars($linha['registro']) . '</td>';
    echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
    echo '<td><a href="?pagina=editar&id=' . htmlspecialchars($linha['registro']) . '"><i class="fas fa-user-edit"></i></a></td>';
    echo '<td><a href="call.php?id=' . htmlspecialchars($linha['registro']) . '"><i class="fas fa-thumbs-up"></a></td></tr>';
}
?>
    </tbody>
</table>
