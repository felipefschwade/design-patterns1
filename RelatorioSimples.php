<?php 
	class RelatorioSimples extends TemplateRelatorio{
		protected final function cabecalho(){ //Final indica que uma classe filha não pode alterar uma função vinda da classe pai
			echo "Banco do Nivaldo";
		}
		protected  function rodape(){
			echo "(19) 1919-1999"
		}
		protected  function corpo(Conta $Conta){
			echo $Conta->getTitular()." - ".$Conta->getSaldo();
		}
		public function imprime(){
			$this->cabecalho();
			$this->corpo($Conta);
			$this->rodape();
		}
	}