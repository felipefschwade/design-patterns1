<?php 
	class NotaFiscalBuilder{
		private $razaosocial;
		private $cnpj;
		private $itens;
		private $valorbruto;
		private $impostos; 
		private $datadeemissao;
		private $observacoes;
		private $acoes; 

		function __construct(){
			$this->itens = array();
			$this->valorbruto = 0;
			$this->impostos = 0;
			$this->datadeemissao = date('Y-m-d H:i:s');
			$this->acoes = array();
		}
		public function addAcao(AcoesAoGerarNota $acao){
			array_push($this->acoes, $acao);
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
		public function dataDeEmissao($datadeemissao){
			$this->datadeemissao = $datadeemissao;
			return $this;
		}
		public function comObservacoes($observacoes){
			$this->$observacoes = $observacoes;
		}

		public function build(){
			$NotaFiscal = new NotaFiscal($this->razaosocial, $this->cnpj, $this->itens, $this->valorbruto, $this->impostos, $this->datadeemissao, $this->observacoes);
			foreach ($this->acoes as $acao) {
				$acao->executa($NotaFiscal);
			}
			return $NotaFiscal;
		}
	}
