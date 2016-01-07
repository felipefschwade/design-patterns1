<?php 
	class Conta {
		private $titular;
		private $saldo;
		private $estadoAtual;

		function __construct($titular, $saldo){
			$this->titular = $titular;
			$this->saldo = $saldo;
			$this->saldo > 0 ? $this->estadoAtual = new Positivo() : $this->estadoAtual = new Negativo();
		}
		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($novoSaldo){
			$this->saldo = $novoSaldo;
		}
		public function getTitular(){
			return $this->titular;
		}
		public function setEstadoAtual(EstadoDeUmaConta $novoEstado){
			$this->estadoAtual = $novoEstado;
		}
		public function saca($valor){
			$this->estadoAtual->saca($this, $valor);
		}

		public function deposita($valor){
			$this->estadoAtual->deposita($this, $valor);
		}
	}
	