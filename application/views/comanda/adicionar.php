<form method="post" action="<?= base_url('comanda/salvar'); ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Proprietário da Comanda</label>
            <input type="text" name="NomeProprietario" id="nome" class="form-control" placeholder="Exemplo: João Alves">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Produto</label>
            <input type="text" id="nome" class="form-control" placeholder="Exemplo: Coca-cola">
        </div>
        <div class="form-group col-md-2">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade">
        </div>
        <div>
            <button type="button" class="btn btn-success" style="margin-top:32px;">Adicionar Produto na Comanda</button>
        </div>
    </div>

    <div>
        <input type="hidden" name="numeroDeProdutos" value="0">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<script type="text/javascript">
    
</script>