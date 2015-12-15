<?php 
	require_once 'Orcamento.php';
	require_once 'Imposto.php';
	require_once 'CalculadorDeImposto.php'; 
	require_once 'ICMS.php';
    require_once 'ISS.php'; 
    require_once 'ICCC.php'; 
    $reforma = new Orcamento(3001); 
    $ICCC = new ICCC; 
    echo $ICCC->calcula($reforma); 
?>