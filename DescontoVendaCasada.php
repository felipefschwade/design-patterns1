<?php
	class DescontoVendaCasada implements Desconto{
		private $proximo;
		private function existe($nomeDoItem, Orcamento $orcamento) {
	        foreach ($orcamento->getItens() as $item) {
	            if($item->getNome() == $nomeDoItem){
	            	return true;
	        	} }
        		return false;	
		}
		public function desconto(Orcamento $Orcamento){
        	if($this->existe("LAPIS", $Orcamento) && $this->existe("CANETA", $Orcamento)) {
         		return $Orcamento->getValor() * 0.05;
			} else {
				$this->proximo->desconto($Orcamento);
			}
		}
		public function setProximo(Desconto $Desconto){
				$this->proximo = $Desconto;
			}
	}