<?php

date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: charset=utf-8');
$link = mysqli_connect("ipdb", "userbd", "senhabd", "banco");
		//$link = mysqli_connect("localhost", "root", "", "mensagens");
		if (!$link) {
		    die("Erro de base");
		}
		$varParams['han_franquia'] = 13;
		
		$sql = "SELECT * FROM cgfo.cad_estacao_olt WHERE han_franquia = '".$varParams['han_franquia']."'";
		$query = mysqli_query($link, $sql) or die(mysqli_error($link) . "\n$sql");
		 while ($resultado = mysqli_fetch_assoc($query)) {
		 	$olts[] = $resultado;
		}
		
		echo "<pre>";var_dump($olts);
?>