<?php
    
    namespace PHP\Modelo\Cadastros;
    
    class Endereco{

        private string $rua;
        private string $numero;
        private string $cidade;
        private string $estado;
        private string $cep;

        public function __construct(string $rua, string $numero, string $cidade, string $estado, string $cep){
            $this->rua = $rua;
            $this->numero = $numero;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
        }//fim do construtor



        public function getRua() : string
        {
            return $this->rua;
        }//fim do Get
        public function setRua(string $rua) : void
        {
            $this->rua = $rua;
        }//fim do Set





        public function getNumero() : string
        {
            return $this->numero;
        }//fim do Get
        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }//fim do Set





        public function getCidade() : string
        {
            return $this->cidade;
        }//fim do Get
        public function setCidade(string $cidade) : void
        {
            $this->cidade = $cidade;
        }//fim do Set




        public function getEstado() : string
        {
            return $this->estado;
        }//fim do Get
        public function setEstado(string $estado) : void
        {
            $this->estado = $estado;
        }//fim do Set




        public function getCep() : string
        {
            return $this->cep;
        }//fim do Get
        public function setCep(string $cep) : void
        {
            $this->cep = $cep;
        }//fim do Set

    }//fim da class

?>