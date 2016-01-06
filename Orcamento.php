<?php 
	class Orcamento{
		private $valor;
		private $itens = array();
		private $estadoAtual;

		function __construct($valor){
			$this->valor = $valor;
			$this->estadoAtual = new emAprovacao();
		}

		public function getValor(){
			return $this->valor;
		}
		public function setValor($novoValor){
			$this->valor = $novoValor;
		}

		public function adicionaItem(Item $Item){
			$this->itens[] = $Item;
		}
		public function getItens(){
			return $this->itens;
		}
		public function setEstadoAtual(EstadoDeUmOrcamento $novoEstado){
			$this->estadoAtual = $novoEstado;
		}
		public function aplicaDesconto(){
			$this->estadoAtual->aplicaDesconto($this);
		}
		public function aprova(){
			$this->estadoAtual->aprova($this);
		}
		public function reprova(){
			$this->estadoAtual->reprova($this);
		}
		public function finaliza(){
			$this->estadoAtual->finaliza($this);
		}

	}
	