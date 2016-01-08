<?php 
	class NotaFiscalDAO implements AcoesAoGerarNota{
		public function executa(NotaFiscal $nf){
			echo "<br>Salvando a NF no DB<br>";
		}
	}