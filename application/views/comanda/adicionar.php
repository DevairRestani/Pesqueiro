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
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nomeProduto" id="nome" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="valorProduto" class="form-control" id="quantidade">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>