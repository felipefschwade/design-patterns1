<?php
	class Multiplicador implements AcoesAoGerarNota {
		private $fator;
		function __construct($fator) {
	    	$this->fator = $fator;
	  	}
		public function executa(NotaFiscal $nf){
			echo "<br>".$nf->getValor() * $this->fator."<br>";
		}
	}