<?php 
	require_once 'NotaFiscal.php';
	require_once 'NotaFiscalBuilder.php';
	require_once 'Item.php';
	date_default_timezone_set('America/Sao_Paulo');
	$geraNotaFiscal = new NotaFiscalBuilder();
	$geraNotaFiscal->comRazaoSocial("Razão Social");
	$geraNotaFiscal->comCnpj("1234");
	$geraNotaFiscal->addItem(new Item("Tijolo" , 450));
	$geraNotaFiscal->addItem(new Item("Carburador" , 350));
	$geraNotaFiscal->comObservacoes("Todos Novos");
	$geraNotaFiscal->dataDeEmissao();
	$nf = $geraNotaFiscal->build();
	var_dump($nf);
?>