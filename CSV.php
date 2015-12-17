<?php
	class CSV implements Resposta{
		private $proxima;
		public function responde(Requisicao $Req, Conta $Conta){
			if ($Req->getFormato() == Formato::$CSV){
				echo $Conta->getTitular()." ; ".$Conta->getSaldo();
			} else {
				$this->proxima->responde($Req, $Conta);
			}
		}
		public function setProxima(Resposta $resp){
			$this->proxima = $resp;
		}
	}