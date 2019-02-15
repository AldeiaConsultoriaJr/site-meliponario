<?php


function includeHeader(){
	$header = file_get_contents(HEADER_TEMPLATE);

	// pega o nome da página
	$pagina = basename($_SERVER['PHP_SELF'],'.php'); 

    if($pagina == "index"){
        $pagina = "home";
    }

    // muda o texto da linha do css específico
    $header = str_replace('ARQUIVO_CSS_PAGINA', $pagina , $header);

	echo $header;
}

