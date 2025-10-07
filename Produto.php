<?php
// ┏━━━━•°•°❀°•°•━━━━┓
// ✧*̥˚    Anna     *̥˚✧
// ┗━━━━•°•°❀°•°•━━━━┛
    class Produto{
        private $id;
        private $nome;
        private $preco;
        public function __construct($id, $nome, $preco){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
        }
        //Getters
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        //Setters
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        //Converte o objeto para array (útil para salvar JSON)
        public function toArray($data){
            return new Produto($data['id'], $data['nome'], $data['preco']);
        }
    }
?>