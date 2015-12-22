<?php
    require_once 'Desconto.php';
    require_once 'Desconto500Reais.php';
    require_once 'Desconto5Itens.php';
    require_once "SemDesconto.php";
    require_once "DescontoVendaCasada.php";
    echo "<br>";
    echo "Descontos <br>";
    $Desconto5Itens = new Desconto5Itens();
    $Desconto500Reais = new Desconto500Reais();
    $SemDesconto = new SemDesconto();
    $DescontoVendaCasada = new DescontoVendaCasada(); 

    $Desconto5Itens->setProximo($Desconto500Reais);
    $Desconto500Reais->setProximo($DescontoVendaCasada);
    $DescontoVendaCasada->setProximo($SemDesconto);

    echo $Desconto5Itens->desconto($reforma);