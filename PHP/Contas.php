<?php
    require_once("Cadastro.php");
    class Conta{
        private CadastroClient $usuario;

        public function __construct(CadastroClient $usuario)
        {
            $this->usuario = $usuario;
        }//fim do construtor


        public function logar(Conta $cont, CadastroClient $usuario) : void
        {
            if($cont-> logar()==$usuario){
                echo "Você já possui um cadastro.";
                return;//Parar a execução do métado

            }//fim do if

        }//fim da função logar
    }//fim da class

?>