<?php 
	require_once 'Orcamento.php';
	require_once 'Imposto.php';
	require_once 'CalculadorDeImposto.php'; 
	require_once 'ICMS.php';
    require_once 'ISS.php'; 
    require_once 'ICCC.php'; 
    require_once "Item.php";

    $reforma = new Orcamento(500); 
    $reforma->adicionaItem(new Item("LAPIS", 50));
    $reforma->adicionaItem(new Item("CANETA", 150));
    $CalculadorDeImposto = new CalculadorDeImposto;
    echo $CalculadorDeImposto->calcula($reforma, new ICMS());
    //Descontos

    
?>