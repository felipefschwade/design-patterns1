<?php 
	require_once 'Conta.php';
	require_once 'Formato.php';
	require_once 'Requisicao.php';
	require_once 'Resposta.php';
	require_once 'CSV.php';
	require_once 'XML.php';
	require_once 'PORCENTO.php';

	$Conta = new Conta("Felipe", 1500);
	$Req = new Requisicao(3);

	$XML = new XML();
	$CSV = new CSV();
	$PORCENTO = new PORCENTO();

	$XML->setProxima($CSV);
	$CSV->setProxima($PORCENTO);
	$PORCENTO->setProxima($XML);

	echo $XML->responde($Req, $Conta);
?>