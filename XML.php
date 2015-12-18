<?php
	class XML implements Resposta{
		private $proxima;
		public function responde(Requisicao $Req, Conta $Conta){
			if ($Req->getFormato() == Formato::$XML){
				echo "<conta><titular>".$Conta->getTitular()."</titular><saldo>".$Conta->getSaldo()."</saldo></conta>";
			} else {
				$this->proxima->responde($Req, $Conta);
			}
		}
		function __construct($resp){
			$this->proxima = $resp;
		}
	}