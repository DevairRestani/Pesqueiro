<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>

<style>
.aligCenter {
    width: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 20px;
    resize: both;
    overflow: auto;
}
</style>

<body>
    <?php if(isset($erro)){
        echo('<div class="alert alert-danger" role="alert">
                Dados Invalidos!!!
            </div>');
    } ?>

    <form class="container aligCenter" action="login" method="post">
        <div class="form-group">
            <label for="User">Usuário</label>
            <input type="text" name="usuario" class="form-control" id="User" aria-describedby="userHelp"
                placeholder="Usuário">
            <small id="userHelp" class="form-text text-muted">Nunca compartilhe com <b>ninguém.</b></small>
        </div>
        <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="Senha" placeholder="Senha">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Manter">
            <label class="form-check-label" for="Manter">Manter-me logado</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="<?= base_url('home'); ?>">entrar</a>
    </form>
</body>

<script src="<?= base_url('assets/jquery/jquery.js');?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

</html>