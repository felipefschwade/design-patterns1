<?php
	class ISS extends Imposto {
				function __construct(Imposto $outroImposto = null){
					parent::__construct($outroImposto);
				}
	            public function calcula(Orcamento $Orcamento) {
	              return $Orcamento->getValor() * 0.06 + $this->calculaOutroImposto($Orcamento);
	          }
	      }