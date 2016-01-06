<?php 
	interface EstadoDeUmOrcamento{
		public function aplicaDesconto(Orcamento $Orcamento);
		public function aprova(Orcamento $Orcamento);
		public function reprova(Orcamento $Orcamento);
		public function finaliza(Orcamento $Orcamento);
	}