<?php 
    $i = 0;
    while(isset($faltaEstoque[$i])){
    ?>
<div class="alert alert-danger" role="alert">
    Erro ao adicionar <?php echo($faltaEstoque[$i]['nome']); ?>: Não há estoque o suficiente para essa requisição
</div>
<?php
        $i++;
    }
?>
<form method="post"
    action="<?php if(isset($dados['comprados'])){ echo base_url('comanda/alterar');}else{ echo base_url('comanda/salvar'); } ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Proprietário da Comanda</label>
            <input type="text" required="required"
                value="<?php if(isset($dados['comanda'])){echo $dados['comanda']['nome']; } ?>" name="NomeProprietario"
                id="nome" class="form-control">
        </div>

        <div class="col-md-6">
            <label for="total">
                <h4>Total</h4>
            </label>
            <div id="total">
                <b>R$ </b> <?php if(isset($dados['comprados'])){
                    $total = 0;
                    $t = 0;
                    while(isset($dados['comprados'][$t]['valor'])){
                        $total += $dados['comprados'][$t]['valor'] * $dados['comprados'][$t]['quantidade'];
                        $t++;
                    }
                    echo $total;
                }else{echo '0,00';} ?>
            </div>
        </div>
    </div>
    <div id="destino">
        <div class="form-row" id="origem">
            <?php if(isset($dados['comprados'][0])){
                    $j = 0;
                    while(isset($dados['comprados'][$j])){ ?>
            <div class="form-group col-md-6">
                <label for="nomeProduto">Nome do Produto</label>
                <select class="custom-select" name="produto_<?= $j ?>" id="nomeProduto">
                    <option selected value="">Selecionar</option>
                    <?php if(isset($produto)){
                                    $i = 0;
                                    while(isset($produto[$i])){ ?>
                    <option <?php if($produto[$i]['produtoID'] == $dados['comprados'][$j]['produtoID']){echo 'selected';} ?>
                        value="<?php echo $produto[$i]['produtoID']?>"><?php echo $produto[$i]['nome'] ?></option>
                    <?php  
                                        $i++;
                                    }
                                } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="qtd_<?= $j ?>"
                    value="<?= $dados['comprados'][$j]['quantidade']; ?>" name="qtd_0" autocomplete="off" />
            </div>
            <?php if(!isset($dados['comprados'][$j+1])){ ?>
            <div class="form-group">
                <label for=""></label>
                <button type="button" id="btnAdicionar" class="btn btn-primary form-control"
                    onclick="adicionarCampo()">Adicionar Produto</button>
            </div>
            <?php } ?>
            <?php
                    $j++;
                }
            ?>
        </div>
    </div>
    <?php
        }else{ ?>
    <div class="form-group col-md-6">
        <label for="nomeProduto">Nome do Produto</label>
        <select class="custom-select" name="produto_0" id="nomeProduto">
            <option selected value="" selected>Selecionar</option>
            <?php 
                if(isset($produto)){
                    $i = 0;
                    while(isset($produto[$i])){ ?>
            <option value="<?php echo $produto[$i]['produtoID']?>"><?php echo $produto[$i]['nome'] ?></option>
            <?php  
                        $i++;
                    }
                } 
            ?>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="qtd_0" autocomplete="off">
    </div>
    <div class="form-group">
        <label for=""></label>
        <button type="button" id="btnAdicionar" class="btn btn-primary form-control"
            onclick="adicionarCampo()">Adicionar Produto</button>
    </div>
    </div>
    </div>

    <?php } ?>


    <div class="container">
        <input type="hidden" name="tipoDeAlteracao"
            value="<?php if(isset($dados['comanda'])) echo(intval($this->uri->segment(3))); else echo(0);?>"
            id="numeroProdutos">
        <ul class="list-group" id="listaProdutos">

        </ul>
    </div>
        
    <button type="submit" class="btn btn-primary" style="margin-bottom:8%">Salvar</button>
    <?php if(isset($dados)){ ?>
        <input type="hidden" id="comandaID" value="<?= $dados['comanda']['id'] ?>">
        <button type="button" class="btn btn-warning" onclick="fecharComanda()" style="margin-bottom:8%">Fechar comanda</button>
    <?php } ?>
</form>

<script type="text/javascript">
var produtos, elementos = [];
var numeroElementos = document.querySelector('#tiposDeProdutos');
var listaProdutos = document.querySelector('#listaProdutos');
var nomeProduto = document.querySelector('#nomeProduto');
var quantidadeProduto = document.querySelector('#quantidade');

function carregarProdutos() {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            produtos = JSON.parse(req.responseText);
        }
    }
    req.open("GET", "<?= base_url('ajax'); ?>", true);
    req.send();
}

function adicionarProduto() {
    if (numeroElementos.value == 0) {
        let liTag = document.createElement('li');
        liTag.setAttribute('class', 'list-group-item d-flex justify-content-between align-items-center');

        listaProdutos.appendChild(liTag);

        let titulo = document.createElement('p');
        titulo.textContent = "Nome do Produto";
        liTag.appendChild(titulo);

        titulo = document.createElement('p');
        titulo.textContent = "Quantidade";
        liTag.appendChild(titulo);
    }

    let liTag = document.createElement('li');
    liTag.setAttribute('class', 'list-group-item d-flex justify-content-between align-items-center');

    let selectProduto = document.createElement('select');
    selectProduto.setAttribute('class', 'custom-select');
    selectProduto.setAttribute('name', 'nome' + numeroElementos.value);

    let option;
    for (let i = 0; i < produtos.length; i++) {
        option = document.createElement('option');
        option.setAttribute('value', produtos[i].id);
        option.textContent = produtos[i].nome;

        selectProduto.appendChild(option);

        if (nomeProduto[nomeProduto.selectedIndex].text == produtos[i].nome) {
            selectProduto.selectedIndex = i;
        }
    }

    let quantidade = document.createElement('input');
    quantidade.setAttribute('type', 'number');
    quantidade.setAttribute('name', 'quantidade' + numeroElementos.value);
    quantidade.setAttribute('autocomplete', 'off');
    quantidade.setAttribute('class', 'form-control');
    quantidade.setAttribute('value', quantidadeProduto.value);

    elementos.push(liTag);
    numeroElementos.value++;

    listaProdutos.appendChild(liTag);
    liTag.appendChild(selectProduto);
    liTag.appendChild(quantidade);

    nomeProduto.selectedIndex = 0;
    quantidadeProduto.value = 0;
}

carregarProdutos();
</script>