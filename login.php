<?php
include 'db.php';
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuarios WHERE login_usuario=:usuario";
try {
    $stmt = $conexao->prepare($query);
    $stmt->execute(array(':usuario' => $usuario));    
    
    if ($stmt->rowCount() == 1) {        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);        
        if ($senha == $row['senha_usuario']) {
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php?pagina=chamar');
            exit();
        }    
    }   
    header('Location: index.php?erro');
    exit();         
} catch (PDOException $e) {
    echo "Erro ao executar a consulta: " . $e->getMessage();
}
?>