<?php 
	abstract class TemplateImposto implements Imposto{
		public function calcula(Orcamento $Orcamento){
			if ($this->deveUsarMaximaTaxacao($Orcamento)){
				return $this->maximaTaxacao($Orcamento);
			} else {
				return $this->minimaTaxacao($Orcamento);
			}
		}
		protected abstract function deveUsarMaximaTaxacao(Orcamento $Orcamento);
		protected abstract function maximaTaxacao(Orcamento $Orcamento);
		protected abstract function minimaTaxacao(Orcamento $Orcamento);
	}