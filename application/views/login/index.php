<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <script src="<?= base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
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

.link {
    padding-top: 6px;
}
</style>

<body>
    <form class="form-horizontal container aligCenter">
        <hr>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
            <div class="col-sm-10">
                <input autocomplete="off" type="email" class="form-control" id="inputEmail3" placeholder="Usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-10">
                <input autocomplete="off" type="password" class="form-control" id="inputPassword3" placeholder="Senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-7">
                <button type="submit" class="btn btn-default">Entrar</button>
            </div>
            <div class="col-sm-3 link">
                <a href="<?= base_url('home');?>">Esqueci os dados</a>
            </div>
        </div>
        <hr>
    </form>
</body>

</html>