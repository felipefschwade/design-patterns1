<?php
	class ICPP extends TemplateImposto{
		function __construct(Imposto $outroImposto = null){
					parent::__construct($outroImposto);
				}
		protected function deveUsarMaximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500;
		}
		protected function maximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.07 + $this->calculaOutroImposto($Orcamento);
		}
		protected function minimaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.05 + $this->calculaOutroImposto($Orcamento);
		}
	}