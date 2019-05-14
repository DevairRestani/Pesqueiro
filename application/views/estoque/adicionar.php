<form method="post" action="<?php if(isset($produto)){ echo base_url('produto/alterar');}else{ echo base_url('produto/salvar');} ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do Produto</label>
            <input type="text" value="<?php if(isset($produto)){ echo $produto[0]['nome'];} ?>" name="NomeProduto"
                id="nome" class="form-control" placeholder="Exemplo: Coca-cola 2L">
        </div>
        <div class="form-group col-md-3">
            <label for="quantidade">Quantidade</label>
            <input type="number" value="<?php if(isset($produto)){ echo $produto[0]['quantidade'];} ?>"
                name="quantidade" class="form-control" id="quantidade" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
            <label for="valor">Valor</label>
            <input type="double" value="<?php if(isset($produto)){ echo $produto[0]['valor'];} ?>" name="valor"
                class="form-control" id="valor" placeholder="EX: 2,30" autocomplete="off">
        </div>
        <input type="hidden" name="id" value="<?php if(isset($produto)){ echo $produto[0]['id'];} ?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>