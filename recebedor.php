<?php
if(isset($_FILES['foto'])) {

	$arquivo = $_FILES['foto'];
	move_uploaded_file($arquivo['tmp_name'], 'imagens/'.$arquivo['name']);

	echo "Arquivo ".$_POST['nome']." enviado com sucesso!";

}

?>