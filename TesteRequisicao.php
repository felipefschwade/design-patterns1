<?php 
	require_once 'Conta.php';
	require_once 'Formato.php';
	require_once 'Requisicao.php';
	require_once 'Resposta.php';
	require_once 'CSV.php';
	require_once 'XML.php';
	require_once 'PORCENTO.php';
	require_once 'SemFormato.php';

	$Conta = new Conta("Felipe", 1500);
	$Req = new Requisicao(1);

	$XML = new XML(new CSV(new PORCENTO(new SemFormato(0))));

	echo $XML->responde($Req, $Conta);
?>