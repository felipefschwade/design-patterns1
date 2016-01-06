<?php 
	class Finalizado implements EstadoDeUmOrcamento{
		public function aplicaDesconto(Orcamento $Orcamento){}
		public function aprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está Finalizado e não pode ser aprovado");
		}
		public function reprova(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está Finalizado e não pode ser reprovado");
		}
		public function finaliza(Orcamento $Orcamento){
			throw new Exception("Este orçamento já está Finalizado e não pode ser Finalizado novamente");
			
		}
	}	
