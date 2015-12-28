<?php
	abstract class Filtro {
			private $outroFiltro; //final não permite que uma classe filha altere o resultado
			function __construct(Filtro $outroFiltro = null){
				$this->outroFiltro = $outroFiltro;
			}
            abstract public function filtra($contas);
            public function usaOutroFiltro($contas){
            	return ($this->outroFiltro == null ? 0 : $this->outroFiltro->filtra($$contas));
            }
      }