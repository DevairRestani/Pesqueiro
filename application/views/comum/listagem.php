<div>
    <div class="container-botoes">
        <a href="<?= isset($linkAdicionar) ? $linkAdicionar != NULL ?  base_url($linkAdicionar) : 'produto/adicionar' : 'comanda/criar'; ?>" class="btn btn-outline-success btn-sm botao-criar-comanda">Adicionar</a>
    </div>
</div>
<div class="row principal">
    <div class="container">
        <ul class="list-group">
            <?php if(isset($dados)){ 
			$i = 0;
			while(isset($dados[$i])){ ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php 
					echo $dados[$i]['nome']; 
				?>
                <div class="icones-interativos">
                    <a href="<?php echo $dados[$i]['id']; ?>"><span class="fas fa-pencil-alt" title="Editar"></span></a>
                    <a href="<?php echo $dados[$i]['id']; ?>"><span class="fas fa-info-circle" title="Info"></span></a>
                </div>
            </li>
            <?php
				$i += 1;
				} 
			?>
            <?php 
			} 
		?>
        <?php if(isset($produto)){ 
			$i = 0;
			while(isset($produto[$i])){ ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php 
					echo $produto[$i]['nome']; 
				?>
                <div class="icones-interativos">
                    <a href="<?php echo $produto[$i]['id']; ?>"><span class="fas fa-pencil-alt" title="Editar"></span></a>
                    <a href="<?php echo $produto[$i]['id']; ?>"><span class="fas fa-info-circle" title="Info"></span></a>
                </div>
            </li>
            <?php
				$i += 1;
				} 
			?>
            <?php 
			} 
		?>
        </ul>
    </div>
</div>