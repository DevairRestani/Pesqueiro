<form method="post" action="<?= base_url('produto/salvar'); ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Produto</label>
            <input type="text" name="NomeProduto" id="nome" class="form-control" placeholder="Exemplo: Coca-cola">
        </div>
        <div class="form-group col-md-4">
            <label for="unidade">Selecione a Unidade</label>
            <select class="custom-select" id="unidade">
                <option selected>Selecione</option>
                <option value="1">Unidade</option>
                <option value="2">Peso (Kilograma)</option>
                <option value="3">Volume (Litro)</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" id="quantidade">
        </div>
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" name="valor" class="form-control" id="valor" placeholder="EX: 2,30">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>