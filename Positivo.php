<?php 
	class Positivo implements EstadoDeUmaConta {
		public function saca(Conta $Conta, $valor){
			$Conta->setSaldo($Conta->getSaldo() - $valor);
			$Conta->getSaldo() < 0 ? $Conta->setEstadoAtual(new Negativo()) : 0;
		}
		public function deposita(Conta $Conta, $valor){
			$Conta->setSaldo($Conta->getSaldo() + $valor * 0.98);
		}
	}