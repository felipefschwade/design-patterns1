<?php 
	class RelatorioComplexo extends TemplateRelatorio{
		protected  function cabecalho(){
			echo "Banco do Nivaldo";
			echo "Avenida Pernambuco 1325"
			echo "(19) 1919-1999"
		}
		protected  function rodape(){
			echo "bancodonivaldo@bancodonivaldo.com.br"
			echo DATE_RSS;
		}
		protected  function corpo(Conta $Conta){
			echo $Conta->getTitular()." - ". $Conta->getNumero() ." - ". $Conta->getAgencia() . " - " .$Conta->getSaldo();
		}
		public function imprime(){
			$this->cabecalho();
			$this->corpo($Conta);
			$this->rodape();
		}
	}