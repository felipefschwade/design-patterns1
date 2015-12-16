<?php 
	require_once 'Orcamento.php';
	require_once 'Desconto.php';
	require_once 'Desconto500Reais.php';
	require_once 'Desconto5Itens.php';
	require_once 'Imposto.php';
	require_once 'CalculadorDeImposto.php'; 
	require_once 'ICMS.php';
    require_once 'ISS.php'; 
    require_once 'ICCC.php'; 
    require_once "SemDesconto.php";
    $reforma = new Orcamento(501); 
    //Descontos

    echo "<br>";
    echo "Descontos <br>";
    $Desconto5Itens = new Desconto5Itens();
    $Desconto500Reais = new Desconto500Reais();
    $SemDesconto = new SemDesconto();

    $Desconto5Itens->setProximo($Desconto500Reais);
    $Desconto500Reais->setProximo($SemDesconto);

   	$desconto = $Desconto5Itens->desconto($reforma);
   	echo $desconto;
?>