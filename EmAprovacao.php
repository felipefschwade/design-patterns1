<?php 
	class EmAprovacao implements EstadoDeUmOrcamento{
		private $descontoAplicado = false;
		public function aplicaDesconto(Orcamento $Orcamento){
			if (!$this->descontoAplicado){
				$Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.05);
				$this->descontoAplicado = true;
			} else {
				throw new Exception("Desconto já Aplicado");
			}
		}
		public function aprova(Orcamento $Orcamento){
			$Orcamento->setEstadoAtual(new Aprovado());
		}
		public function reprova(Orcamento $Orcamento){
			$Orcamento->setEstadoAtual(new Reprovado());
		}
		public function finaliza(Orcamento $Orcamento){
			throw new Exception("Um Orçamento em aprovação não pode ser finalizado");
			
		}
	}	
