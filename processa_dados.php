<?php

require_once 'config.php'; 		
require_once 'functions.php';
require_once DBAPI;

$name = $_POST['name'];
$email = $_POST['email'];
$subject_matter = $_POST['subject_matter'];
$message = $_POST['message'];

$conexao = open_database();

$query = "INSERT INTO contatos (name,email,subject_matter,message) VALUES( '".$name."','".$email."',
		'".$subject_matter."','".$message."')";

$db = $conexao->query($query);

if($db){
	exit('<script>location.href = "http://www.meliponario.net/contato.php"</script>');
}else{
	echo "Falha";
}

close_database($conexao);



