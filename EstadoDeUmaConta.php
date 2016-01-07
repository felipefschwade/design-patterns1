<?php  
	interface EstadoDeUmaConta {
		public function saca(Conta $Conta, $valor);
		public function deposita(Conta $Conta, $valor);
	}