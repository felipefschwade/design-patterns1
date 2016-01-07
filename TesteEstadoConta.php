<?php
	require_once 'Conta.php';
	require_once 'EstadoDeUmaConta.php';
	require_once 'Negativa.php';
	require_once 'Positivo.php';
	$Conta = new Conta("Felipe", 500);
	echo $Conta->getSaldo()."<br>";
	$Conta->deposita(100);
	echo $Conta->getSaldo()."<br>";
	$Conta->saca(1000);
	echo $Conta->getSaldo()."<br>";
	$Conta->deposita(100);
	echo $Conta->getSaldo()."<br>";
?>