<?php
	class IHIT extends TemplateImposto{
		 public function deveUsarMaximaTaxacao(Orcamento $Orcamento) {
	        $noOrcamento = Array();
	        foreach($Orcamento->getItens() as $item) {
	          if(in_array($item->getNome(),$noOrcamento)) return true;
	          else $noOrcamento[] = $item->getNome();
        }
        return false;
      }

		protected function maximaTaxacao(Orcamento $Orcamento){
			return $Orcamento->getValor() * 0.13 + 100;
		}
		protected function minimaTaxacao(Orcamento $Orcamento){
			return ($Orcamento->getValor() * 0.01) * count($Orcamento->getItens());
		}
	}