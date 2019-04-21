<div>
	<div class="container-botoes">
		<a href="<?= isset($linkAdicionar) ? $linkAdicionar != NULL ?  base_url($linkAdicionar) : '#' : '#'; ?>" class="btn btn-outline-success btn-sm botao-criar-comanda">Adicionar</a>
	</div>
</div>
<div class="row principal">
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Cras justo odio
				<span class="badge badge-primary badge-pill">14</span>
                <svg-icon><img src="../../icons/glyph-iconset-master/svg/si-glyph-book-3.svg" /></svg-icon>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Dapibus ac facilisis in
				<span class="badge badge-primary badge-pill">2</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Morbi leo risus
				<span class="badge badge-primary badge-pill">1</span>
			</li>
		</ul>
	</div>
</div>