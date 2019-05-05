<form method="post" action="<?= base_url('comanda/salvar'); ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Proprietário da Comanda</label>
            <input type="text" name="NomeProprietario" id="nome" class="form-control">
        </div>
    </div>
    <div id="destino">
        <div class="form-row" id="origem">
            <div class="form-group col-md-6">
                <label for="nomeProduto">Nome do Produto</label>
                <select class="custom-select" name="produto_0" id="nomeProduto">
                    <option selected>Selecionar</option>
                    <?php if(isset($produto)){
                        $i = 0;
                        while(isset($produto[$i])){ ?>
                        <option value="<?php echo $produto[$i]['id']?>"><?php echo $produto[$i]['nome'] ?></option>
                        <?php  
                            $i++;
                        }
                    } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="qtd_0" autocomplete="off">
            </div>
            <div class="form-group">
            <label for=""></label>
                <button type="button" id="btnAdicionar" class="btn btn-primary form-control" onclick="adicionarCampo()">Adicionar Produto</button>
            </div>
        </div>
    </div>

    <div class="container">
        <input type="hidden" name="tiposDeProdutos" value="" id="tiposDeProdutos">
        <ul class="list-group" id="listaProdutos">

        </ul>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<script type="text/javascript">
    var produtos, elementos = [];
    var numeroElementos = document.querySelector('#tiposDeProdutos');
    var listaProdutos = document.querySelector('#listaProdutos');
    var nomeProduto = document.querySelector('#nomeProduto');
    var quantidadeProduto = document.querySelector('#quantidade');

    function carregarProdutos(){
        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                produtos = JSON.parse(req.responseText);
            }
        }
        req.open("GET", "<?= base_url('ajax'); ?>", true);
        req.send();
    }

    function adicionarProduto(){
        if(numeroElementos.value == 0){
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
        for(let i = 0; i < produtos.length; i++){
            option = document.createElement('option');
            option.setAttribute('value', produtos[i].id);
            option.textContent = produtos[i].nome;

            selectProduto.appendChild(option);

            if(nomeProduto[nomeProduto.selectedIndex].text == produtos[i].nome){
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
