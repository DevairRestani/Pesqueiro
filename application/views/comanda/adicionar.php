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
                <select name="produto" class="custom-select">
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
                <input type="number" name="quantidade" class="form-control" id="quantidade">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
