<center><h3>Remover o cliente da fila de espera</h3></center>
<?php
include 'db.php';

try {
    // Selecionar registros da fila
    $query = "SELECT registro, nome, status FROM queue";
    $stmt = $conexao->query($query);
    $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em caso de erro, exibir mensagem de erro
    echo "Erro ao executar a consulta: " . $e->getMessage();
    exit(); // Terminar a execução do script
}
?>
<a class="btn btn-success" href="zerar.php">Zerar a fila</a>
<table class="table table-over table-striped" id="tabela">
    <thead>
        <tr>
            <th>Registro</th>
            <th>Nome do Cliente</th>
            <th>Remover cliente da fila</th>
        </tr>
    </thead>
    <tbody>
<?php
// Loop pelos resultados da consulta
foreach ($fila as $linha) {
    echo '<tr><td>' . htmlspecialchars($linha['registro']) . '</td>';
    echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
    if ($linha['status'] == 0) {
        echo '<td><a href="delete.php?id=' . htmlspecialchars($linha['registro']) . '"><i class="fas fa-trash-alt"></i></a></td></tr>';
    } else {
        echo '<td>Atendido</td></tr>';
    }
}
?>
    </tbody>
</table>