<?php 
	class NotaFiscalBuilder{
		private $razaosocial;
		private $cnpj;
		private $itens;
		private $valorbruto;
		private $impostos; 
		private $datadeemissao;
		private $observacoes;
		
		function __construct(){
			$this->itens = array();
			$this->valorbruto = 0;
			$this->impostos = 0;
		}

		public function comRazaoSocial($razaosocial){
			$this->$razaosocial = $razaosocial;
		}
		public function comCnpj($cnpj){
			$this->$cnpj = $cnpj;
		}

		public function addItem(Item $Item){
			array_push($this->itens, $Item);
			$this->valorbruto += $Item->getValor();
			$this->impostos += $this->valorbruto * 0.20;
		}
		public function dataDeEmissao($datadeemissao = null){
			$this->datadeemissao = null ? date('Y-m-d H:i:s') : $datadeemissao;
		}
		public function comObservacoes($observacoes){
			$this->$observacoes = $observacoes;
		}

		public function build(){
			$NotaFiscal = new NotaFiscal($this->razaosocial, $this->cnpj, $this->itens, $this->valorbruto, $this->impostos, $this->datadeemissao, $this->observacoes);
			return $NotaFiscal;
		}
	}
