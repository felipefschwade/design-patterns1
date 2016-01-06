<?php 
	require_once 'Orcamento.php';
	require_once 'EstadoDeUmOrcamento.php';
	require_once 'EmAprovacao.php';
	require_once 'Aprovado.php';
	require_once 'Reprovado.php';
	require_once 'Finalizado.php';
	$Orcamento = new Orcamento(500);
	echo $Orcamento->getValor()."</br>";
	$Orcamento->aplicaDesconto();
	$Orcamento->aplicaDesconto();
	echo $Orcamento->getValor()."</br>";
	$Orcamento->aprova();
	$Orcamento->aplicaDesconto();
	$Orcamento->aplicaDesconto();
	echo $Orcamento->getValor()."</br>";
?>