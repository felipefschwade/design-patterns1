<?php 
	class TemplateRelatorio{
		protected abstract function cabecalho();
		protected abstract function rodape();
		protected abstract function corpo(Conta $Conta);
		public function imprime(){
			$this->cabecalho();
			$this->corpo($Conta);
			$this->rodape();
		}
	}
		