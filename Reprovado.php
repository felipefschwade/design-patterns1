<?php 
	class Reprovado implements EstadoDeUmOrcamento{
		public function aplicaDesconto(Orcamento $Orcamento){}
		public function aprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está Reprovado e não pode ser aprovado");
		}
		public function reprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está Reprovado e não pode ser reprovado novamente");
		}
		public function finaliza(Orcamento $Orcamento){
			$Orcamento->setEstadoAtual(new Finalizado());
		}
	}	
