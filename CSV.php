<?php
	class CSV extends Resposta{
		private $proxima;
		public function responde(Requisicao $Req, Conta $Conta){
			if ($Req->getFormato() == Formato::$CSV){
				echo $Conta->getTitular()." ; ".$Conta->getSaldo();
			} else {
				$this->proxima->responde($Req, $Conta);
			}
		}
		function __construct($resp){
			$this->proxima = $resp;
		}
	}