<?php 
	require_once 'Orcamento.php';
	require_once 'Imposto.php';
	require_once 'CalculadorDeImposto.php' ; 
	require_once 'ICMS.php';
    require_once 'ISS.php'; 
    require_once 'ICCC.php'; 
    require_once "Item.php";
    require_once 'TemplateImposto.php';
    require_once 'ICPP.php';
    require_once 'IKCV.php';
    require_once 'IHIT.php';
    require_once 'ImpostoMuitoAlto.php';

    $reforma = new Orcamento(501); 
    $reforma->adicionaItem(new Item("LAPIS", 50));
    $reforma->adicionaItem(new Item("CANETA", 10));
    $CalculadorDeImposto = new CalculadorDeImposto;
    echo $CalculadorDeImposto->calcula($reforma, new IKCV(new ICPP()));
?>