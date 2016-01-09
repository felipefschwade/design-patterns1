<?php 
	require_once 'autoload.php';

	date_default_timezone_set('America/Sao_Paulo');
	$acoes = array( new NotaFiscalDAO(),
					new EnviaNFPorEmail(),
					new Multiplicador(5));
	$geraNotaFiscal = new NotaFiscalBuilder($acoes);
	$geraNotaFiscal->comRazaoSocial("Razão Social");
	$geraNotaFiscal->comCnpj("1234");
	$geraNotaFiscal->addItem(new Item("Tijolo" , 450));
	$geraNotaFiscal->addItem(new Item("Carburador" , 350));
	$geraNotaFiscal->comObservacoes("Todos Novos");
	$nf = $geraNotaFiscal->build();
	var_dump($nf);
?>