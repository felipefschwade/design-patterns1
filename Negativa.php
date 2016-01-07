<?php  
	class Negativo implements EstadoDeUmaConta {
		public function saca(Conta $Conta, $valor){
			throw new Exception("Contas negativas não podem realizar saques.");
		}
		public function deposita(Conta $Conta, $valor){
			$Conta->setSaldo($Conta->getSaldo() + $valor * 0.95);
			$Conta->getSaldo() > 0 ? $Conta->setEstadoAtual(new Positivo()) :  0;
		}
	}