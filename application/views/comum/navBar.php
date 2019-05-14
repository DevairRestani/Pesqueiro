<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<style>
.page-footer {
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: #007bff;
    color: white;
}

.lupa {
    width: 2.5%;
    background-color: #007bff;
    border: 5px;
}

label {
    margin-bottom: 1px;
}

.centro{
    margin-right: 50%;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 25px;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('home'); ?>">Comandas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('estoque');?>">Estoque</a>
                </li>
            </ul>
            <ul class="navbar-nav centro">
                <li class="nav-item">
                    <span class="text-white"><?php if(isset($produto)){echo 'Estoque';}else{echo 'Comandas';} ?></span>
                </li>
            </ul>
            <ul class="navbar-nav pull-right">
                <li class="nav-item">
                    <a href="#" class="text-white btn btn-danger">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">