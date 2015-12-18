<?php
    class RespostaEmPorcento implements Resposta {
        private $outraReposta;
        function __construct(Resposta $outraResposta) {
            $this->outraResposta = $outraResposta;
        }
        public function RespostaEmPorcento() {
            $this->outraResposta = null;
        }
         publicfunction responde(Requisicao $req, Conta $conta) {
            if($req->getFormato() == Formato::PORCENTO) {
                echo $conta->getTitular() . '%' . $conta->getSaldo();
            } else if(!is_null($outraResposta)){
                $outraResposta->responde($req, $conta);
            } else {
                throw new Exception("Formato de resposta não encontrado");
            }
        }