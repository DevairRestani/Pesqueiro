<div>
    <div class="container-botoes">
        <a href="<?= isset($linkAdicionar) ? $linkAdicionar != NULL ?  base_url($linkAdicionar) : 'produto/adicionar' : 'comanda/criar'; ?>"
            class="btn btn-outline-success btn-sm botao-criar-comanda">Adicionar</a>
    </div>
</div>
<div class="row principal">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">
                        <?php if(isset($dados)){echo 'Data de Abertura';}elseif(isset($produto)){echo 'Valor';} ?>
                    </th>
                    <?php if(isset($produto)){echo '<th scope="col">Quantidade</th>';} ?>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($dados)){
                    $i = 0;
                    while(isset($dados[$i])){
                ?>
                <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><?php echo $dados[$i]['nome']; ?></td>
                    <td><?php echo $dados[$i]['horaabertura']; ?></td>
                    <td> <a href="<?= base_url("comanda/editar/".$dados[$i]['id']); ?>"><span class="fas fa-pencil-alt"
                                title="Editar"></span></a>
                        <a href=" <?= base_url("comanda/excluir/".$dados[$i]['id']); ?>" onkeydonw="confirmacaoExcluir(this)"><span class="fas fa-times-circle"
                                title="Excluir"></span></a>
                    </td>
                </tr>
                <?php
                        $i++;
                    }
                }elseif(isset($produto)){
                    $i = 0;
                    while(isset($produto[$i])){
                ?>
                <tr>
                    <th scope="row"><?php echo $i+1 ?></th>
                    <td><?php echo $produto[$i]['nome'] ?></td>
                    <td><span><b>R$ </b></span><?= $produto[$i]['valor'] ?></td>
                    <td><?= $produto[$i]['quantidade'] ?></td>
                    <td>
                        <a href="<?= base_url("estoque/editar/".$produto[$i]['produtoID']); ?>"><span class="fas fa-pencil-alt"
                                title="Editar"></span></a>
                        <a href="<?= base_url('estoque/excluir/'.$produto[$i]['produtoID']); ?>" onkeydonw="confirmacaoExcluir(this)"><span class="fas fa-times-circle"
                                title="Excluir"></span></a>
                    </td>
                </tr>
                <?php
                        $i++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
</div>