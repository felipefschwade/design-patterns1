<?php
	class Desconto500Reais implements Desconto{
		private $proximo;
		public function desconto(Orcamento $Orcamento){
        	if($Orcamento->getValor() > 500) {
         		return $Orcamento->getValor() * 0.07;
			} else {
				$this->proximo->desconto($Orcamento);
			}
		}
		public function setProximo(Desconto $Desconto){
				$this->proximo = $Desconto;
			}
	}