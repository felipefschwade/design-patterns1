<?php 
	class Aprovado implements EstadoDeUmOrcamento{
		private $descontoAplicado = false;
		public function aplicaDesconto(Orcamento $Orcamento){
			if (!$this->descontoAplicado){
				$Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.02);
				$this->descontoAplicado = true;
			} else {
				throw new Exception("Desconto já Aplicado");
			}
		}
		public function aprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está aprovado e não pode ser aprovado novamente");
		}
		public function reprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está aprovado e não pode mais ser reprovado");
		}
		public function finaliza(Orcamento $Orcamento){
			$Orcamento->setEstadoAtual(new Finalizado());
			
		}
	}	
