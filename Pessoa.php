<?php

// #########
//     Rhyan
//    Vinicius
// #########
    class Pessoa {
        protected int $idPessoa;
        protected string $nome;
        protected string $cpf;

        public function __construct($idPessoa, $nome, $cpf) {
            $this->idPessoa = $idPessoa;
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getIdPessoa(){
            return $this->idPessoa;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getCpf(){
            return $this->cpf;
        }
    }
?>