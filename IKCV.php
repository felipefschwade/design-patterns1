<?php
	class IKCV extends TemplateImposto{
		function __construct(Imposto $outroImposto = null){
					parent::__construct($outroImposto);
				}
		protected function deveUsarMaximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500 && $this->temItemMaisCaroQue100($Orcamento);
		}
		protected function maximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.10 + $this->calculaOutroImposto($Orcamento);
		}
		protected function minimaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.06 + $this->calculaOutroImposto($Orcamento);
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