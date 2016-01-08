<?php 
	require_once 'NotaFiscal.php';
	require_once 'NotaFiscalBuilder.php';
	require_once 'Item.php';
	require_once 'AcoesAoGerarNota.php';
	require_once 'EnviaNFPorEmail.php';
	require_once 'NotaFiscalDAO.php';
	require_once 'Multiplicador.php';

	date_default_timezone_set('America/Sao_Paulo');
	$geraNotaFiscal = new NotaFiscalBuilder();
	$geraNotaFiscal->comRazaoSocial("Razão Social");
	$geraNotaFiscal->comCnpj("1234");
	$geraNotaFiscal->addItem(new Item("Tijolo" , 450));
	$geraNotaFiscal->addItem(new Item("Carburador" , 350));
	$geraNotaFiscal->comObservacoes("Todos Novos");
	$geraNotaFiscal->addAcao(new NotaFiscalDAO());
	$geraNotaFiscal->addAcao(new EnviaNFPorEmail());
	$geraNotaFiscal->addAcao(new Multiplicador(5));
	$nf = $geraNotaFiscal->build();
	var_dump($nf);
?>