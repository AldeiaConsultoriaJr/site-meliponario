<?php
	require_once 'config.php';
	require_once 'functions.php';
	require_once DBAPI; 
	includeHeader();
?>
<?php $db = open_database();?>


<section id="hero">

	<div class="row">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 format">Contato</div>
		</div>
	</div>
</section>

<section id="contato">
	<div class="container">
		<div class="row fundo">
			<div class="col-md-5">
				<div class="row">
					<img class="img-responsive img-centralizada marge" src="img/contato/aldeia.png">
				</div>
				<div class="row">
					<div class="marge textoContato">
							contato@aldeiaconsultoriajr.com
							<br><br> www.aldeiaconsultoriajr.com
							<br> facebook.com/aldeiajunior
							<br> Mobile: (35) 98880-5652
					</div>
				</div>
			</div>
			<div class="col-md-7 fundo">
				<div class="tamMap marge" id="map"></div>
			</div>
		</div>
		<!-- Início formulário -->
		<div class="row fundo">
			<div class="col-md-12">
				<form class="form-horizontal formulario-contato marge" method="post" 
				action="processa_dados.php">

					<div class="form-group">
					    <input type="nome" name="name" class="form-control" id="inputNome" placeholder="Nome *" name="name" required="true">
					</div>

					<div class="form-group">
				      	<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email *" name="email" required="true">
				    </div>

				 	<div class="form-group">
						<select class="form-control" name="subject_matter" required="true">
							<option value="educacao_ambiental">Educação Ambiental nas Escolas</option>
							<option value="mini_curso_meliponicultura">Mini Curso Meliponicultura</option>
							<option value="visita_agendada">Visita Agendada no Meliponário</option>
							<option value="iscas_para_abelhas">Iscas para Abelhas nativas</option>
							<option value="pesquisas_cientificas">Pesquisas Científicas</option>
							<option value="outros_assuntos">Outros Assuntos</option>
						</select>
				 	</div>

				  	<div class="form-group">
				    	<textarea class="form-control" rows="3"  placeholder="Mensagem" name="message" required="true"></textarea>
				  	</div>

				  	<div class="form-group">
				    	<button type="submit" class="btn btn-default" style="float: right" >Enviar</button>
				  	</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
	include(FOOTER_TEMPLATE);
?>

