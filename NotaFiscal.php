<?php 
	class NotaFiscal{
		private $razaosocial;
		private $cnpj;
		private $itens = array();
		private $valorbruto;
		private $impostos; 
		private $datadeemissao;
		private $observacoes;
		function __construct($razaosocial, $cnpj, $itens, $valorbruto, $impostos, $datadeemissao, $observacoes){
			$this->razaosocial = $razaosocial;
			$this->cnpj = $cnpj;
			$this->itens = $itens;
			$this->valorbruto = $valorbruto;
			$this->impostos = $impostos;; 
			$this->datadeemissao = $datadeemissao;
			$this->observacoes = $observacoes;
		}
	}
