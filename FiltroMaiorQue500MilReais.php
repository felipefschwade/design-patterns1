<?php
	class FiltroMaiorQue500MilReais extends Filtro {
			private $outroFiltro; //final não permite que uma classe filha altere o resultado
			function __construct(Filtro $outroFiltro = null){
				parent::__construct(Filtro $outroFiltro = null);
			}
        	public function filtra($contas) {
		        $filtradas = new Array();
		        foreach($contas as $c) {
		          if($c->getValor() > 500000) $filtrada[] = $c;
		        }
		        	$this->usaOutroFiltro($contas);
		       	 return $filtradas;
		      }	
            public function usaOutroFiltro($contas){
            	return ($this->outroFiltro == null ? array() : $this->outroFiltro->filtra($contas));
            }
      }