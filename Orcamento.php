<?php 
	class Orcamento{
		private $valor;
		private $itens = array(1,2,3,4);
		function __construct($valor){
			$this->valor = $valor;
		}
		public function getValor(){
			return $this->valor;
		}
		public function adicionaItem(Item $Item){
			$this->itens[] = $Item;
		}
		public function getItens(){
			return $this->itens;
		}
	}
	