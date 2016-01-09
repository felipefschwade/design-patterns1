<?php 
	function CarregaClasse($nome){
		require_once $nome.'.php';
	}
	spl_autoload_register('CarregaClasse');