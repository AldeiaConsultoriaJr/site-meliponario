<?php
	require_once 'config.php';
	require_once 'functions.php';

	includeHeader();
?>

<section id="destaque">
	<div class="row">
		<div class="container">
			<div class="col-md-5">
				<img src="img/diario-abelha/logo-blog.png" class="img-responsive img-logo-abelha" alt="Diário de uma Abelinha">
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<div class="texto-destaque">Abelha, abelinha...</div>		
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>

<section id="nav-blog">
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="#">Postagens</a></li>
			    <li><a href="#">Pesquisas Científicas</a></li>
			    <li><a href="#">Parceiros</a></li>
			    <li><a href="#">Educação Ambiental</a></li>
			</ul>
		</div>
	</nav>
</section>


<?php
	include(FOOTER_TEMPLATE);
?>