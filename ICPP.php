<?php
	class ICPP extends TemplateImposto{
		protected function deveUsarMaximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() > 500;
		}
		protected function maximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.07;
		}
		protected function minimaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.05;
		}
	}