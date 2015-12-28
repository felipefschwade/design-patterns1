<?php
	abstract class Imposto {
			private $outroImposto; //final não permite que uma classe filha altere o resultado
			function __construct(Imposto $outroImposto = null){
				$this->outroImposto = $outroImposto;
			}
            abstract public function calcula(Orcamento $Orcamento);
            public function calculaOutroImposto(Orcamento $Orcamento){
            	return ($this->outroImposto == null ? 0 : $this->outroImposto->calcula($Orcamento));
            }
      }