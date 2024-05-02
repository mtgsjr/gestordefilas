<!DOCTYPE html>
<html>
    <head>
        <title>Gerenciador de Filas KIWI</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <header>
            <div class="container">
                <a href="?pagina=chamar"><img src="https://static1.squarespace.com/static/54884604e4b08e455df8d6ff/54970efce4b05c076b7f0c0d/58dd4af7b3db2b59d248234d/1564305907754/kiwi-sized.png?format=1500w" title="Flow" width="150" height="150"></a>
                <div id="menu">
                    <?php if (isset($_SESSION['login'])) { ?>
                        <a href="?pagina=chamar">Chamar Cliente</a>
                        <a href="?pagina=adicionar">Inserir Cliente </a>
                        <a href="?pagina=remover">Remover Cliente</a>
                        <a href="logout.php"> <?php echo $_SESSION['usuario']; ?>(Logout)</a>
                    <?php } ?>
                </div>
            </div>
        </header>
        <div id="conteudo" class="container">