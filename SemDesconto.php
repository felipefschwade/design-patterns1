<?php
	class SemDesconto implements Desconto{
		private $proximo;
		public function desconto(Orcamento $Orcamento){
				return 0;
			}
		public function setProximo(Desconto $Desconto){
			}
	}