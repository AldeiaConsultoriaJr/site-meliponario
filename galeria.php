<?php
	require_once 'config.php';
	require_once 'functions.php';

	includeHeader();
?>

<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="texto">Galeria</div></div>
        </div>
    </div>
</section>

<section id="galeria-fotos">
    <div class="container">
        <div class="row especial">
            <div class="col-md-4" style="padding:0"><div class="um img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="dois img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="tres img-full"></div></div>
        </div>
        <div class="row especial">
            <div class="col-md-4" style="padding:0"><div class="quatro img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="cinco img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="seis img-full"></div></div>
        </div>
        <div class="row especial">
            <div class="col-md-4" style="padding:0"><div class="sete img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="oito img-full"></div></div>
            <div class="col-md-4" style="padding:0"><div class="nove img-full"></div></div>
        </div>
    </div>
</section>

<?php
	include(FOOTER_TEMPLATE);
?>
