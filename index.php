<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<?php
# Criando a sessao
session_start();

# base de dados
include 'db.php';

# cabecalho
include 'header.php';

# Conteúdo da página e Sessão

if (isset($_SESSION['login'])){
    if (isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    } else {
        $pagina='chamar';
    }

} else {
    $pagina='home';
    
}

if ($pagina=='adicionar'){
    include 'views/adicionar.php';

} elseif ($pagina=='remover'){
    include 'views/remover.php';

} elseif ($pagina=='chamar'){
    include 'views/chamar.php';

} elseif ($pagina=='editar'){
    include 'views/editar.php';

} else {
    include 'views/home.php';
}

# Rodape
include 'footer.php';
?>
