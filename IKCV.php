<?php
	class IKCV extends TemplateImposto{
		protected function deveUsarMaximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500 && $this->temItemMaisCaroQue100($Orcamento);
		}
		protected function maximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.10;
		}
		protected function minimaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.06;
		}
		protected function temItemMaisCaroQue100(Orcamento $Orcamento){
			foreach ($Orcamento->getItens() as $item) {
				if ($item->getValor() > 100) {
					return true;
				}
			}
			return false;
		}
	}