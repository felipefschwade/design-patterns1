<?php
	interface Resposta {
	      public function responde(Requisicao $req, Conta $conta);
	      function __construct($resp);
	    }