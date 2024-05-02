<center><h1>Bem-vindo(a) ao Kiwi</h1></center>
<form method="POST" action="login.php"> 
    <label>Usuário</label>
    <input type="text" name="usuario" placeholder="usuario" class="form-control">
    <br>
    <label>Senha</label>
    <input type="password" name="senha" placeholder="senha" class="form-control"> 
    <br>
    <input type="submit" value="Acessar" class="btn btn-success"> 
</form>
<br>
<?php if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Seu acesso foi negado!
    </div>
<?php } ?>