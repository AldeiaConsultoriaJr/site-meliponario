<?php
	require_once 'config.php';
	require_once 'functions.php';

	includeHeader();

	$_SESSION['contador'] = 1;
?>

<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="texto">Galeria</div></div>
        </div>
    </div>
</section>

<!-- The Modal -->
<div id="myModal" class="modal">
	<span class="close">&times;</span>
	<img class="modal-content" id="imgModal">
	<div id="caption"></div>
</div>

<section id="galeria-fotos">
    <div class="container">
		<?php
		$files = glob('img/galeria/*.{jpg,png,gif}', GLOB_BRACE);
		$primeiro = true;
		foreach($files as $file) {
			$id = explode("/", $file);
			$id = explode(".", $id[2]);
			$id = $id[0];
			if($file == 'img/galeria/bg.jpg')
				continue;
			if($primeiro){
				echo '<div class="row especial">' . "\n";
			}
			echo "\t\t\t" . '<div class="col-md-4" style="padding:0"><img id="imgGaleria' . $id . '"src="' . $file . '" class="img-full"></div>' . "\n";

			if($_SESSION['contador']%3 == 0 && !$primeiro){
				echo "\t\t" . '</div>' . "\n";
				echo "\t\t" . '<div class="row especial">' . "\n";
			}
			if($primeiro){
				$primeiro = false;
			}
			$_SESSION['contador']++;
		}
		$_SESSION['contador']--;
		?>
    </div>
</section>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	var img = Array();

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	<?php
		for($i = 1; $i <= $_SESSION['contador']; $i++){
			echo "\t" . 'img[' . ($i-1) . '] = document.getElementById("imgGaleria' . $i . '");' . "\n";

			echo "\t" . 'img[' . ($i-1) . '].onclick = function(){' . "\n";
			echo "\t\t" . 'modal.style.display = "block";' . "\n";
			echo "\t\t" . 'modalImg.src = this.src;' . "\n";
			echo "\t" . '}' . "\n";
		}
	?>
	var img = document.getElementById('imgGaleria1');
	var modalImg = document.getElementById("imgModal");
	//var captionText = document.getElementById("caption");
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  //captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
</script>

<?php
	include(FOOTER_TEMPLATE);
?>
