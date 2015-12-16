<?php
	class Desconto5Itens implements Desconto{
		private $proximo;
		public function desconto(Orcamento $Orcamento){
			if (count($Orcamento->getItens()) >= 5) {
				return $Orcamento->getValor() * 0.10;
			} else {
				$this->proximo->desconto($Orcamento);
			}
		}
		public function setProximo(Desconto $Desconto){
				$this->proximo = $Desconto;
			}
	}