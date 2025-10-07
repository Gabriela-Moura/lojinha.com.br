<?php
//Carlos
//⠀⠀⠀⠀⢀⣠⠤⡶⣲⢺⣴⣶⢭⣉⢲⣀⠀⠀⠀⠀⠀⠀⠀⠀
//⠀⠀⢀⡾⢵⣶⣿⣿⣿⣾⣷⣳⣿⣷⣵⣈⠷⢤⡀⠀⠀⠀⠀⠀
//⠀⠀⠘⢾⣿⡿⠿⠿⠿⠿⠿⠿⢿⡿⣿⣿⣿⣾⣾⣦⠀⠀⠀⠀
//⠀⠀⣠⡋⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠻⢿⢿⣧⠀⠀⠀
//⠀⣰⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣳⢮⣧⠀⠀
//⢠⣧⠇⡠⠄⣤⣤⣄⡀⠀⠀⣀⣤⣄⣤⣀⠀⠀⣿⣿⣿⣯⣇⠀
//⠈⣿⠀⢀⣶⣾⣿⣿⠁⠀⢸⣿⣿⣿⣧⣌⣥⠀⠘⣿⣿⣿⣿⠀
//⢀⣿⠀⠈⠁⠀⠀⠁⠀⠀⠀⠉⠉⠭⠽⠿⠻⠁⠀⣿⣿⣿⡏⠀
//⡏⠆⠀⠀⠀⠀⠀⠀⡀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠸⠟⢋⣿⣆
//⡎⠀⠀⢀⡴⠂⠈⠉⠻⠿⠿⠛⣀⢲⣤⣄⣀⠀⠀⠈⠘⣏⢹⡿
//⠱⡄⠘⢻⣳⣤⡶⠖⠒⠶⠶⢶⣿⣷⣿⣿⣿⣟⠀⠀⠄⠠⣰⠃
//⠀⢹⠀⠀⠀⠈⠓⠒⠒⠒⠒⠒⠛⠁⢨⣼⣿⣿⡀⣼⠖⠛⠁⠀
//⠀⠘⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣿⣿⣿⣿⢁⠀⠀⠀⠀⠀
//⠀⠀⢸⠀⠀⠀⢀⣀⣀⣀⣠⣤⣶⣿⣿⣿⡿⣁⡎⢸⠀⠀⠀⠀
//⠀⠀⢸⠀⠀⠀⠘⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠁⠸⠀⠀⠀⠀
//⠀⠀⢸⠀⠀⠀⠀⠀⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⡇⠀⠀⠀
//⠀⢀⣼⠀⠀⠀⠀⠀⠈⢹⣿⣿⣿⡟⣿⣿⣿⣟⡁⠀⢿⣷⡄⠀
//⠀⣸⣿⠀⠀⠀⠀⠀⠀⠸⣿⣿⣿⣿⣝⣿⣿⡍⠁⠀⢸⣿⣷⠀
//⠀⣿⣿⡀⠀⠀⠀⠀⠀⢐⣿⣿⣿⣿⣿⣿⣯⠁⠀⠀⢸⣿⣿⠀
//⠀⢿⢿⣿⣄⠀⠀⠀⠀⢼⣿⣿⣿⣿⣿⣿⡯⠀⢠⢒⣿⣿⡏⠀
//⠀⠈⢮⡻⣿⣷⣀⠀⢀⢸⣿⣿⣟⣿⣿⠿⠒⣀⣤⣿⣿⠏⠀⠀
//⠀⠀⠀⠙⠺⣿⣿⣿⣾⣾⣿⣭⣭⣭⣷⣾⣿⣿⣿⠟⠁⠀⠀⠀
//⠀⠀⠀⠀⠀⠀⠉⠛⠻⠿⠿⠿⠿⠿⠿⠟⠛⠉⠁⠀⠀⠀⠀⠀
require_once "Produto.php";

class Venda{
    private $id;
    private $Pessoa; // id do cliente(do JSON de clientes)
    private $itens = [];// lista de objetos Produtos
    private $total;
    private $data;
    
    public function __construct($id, $idPessoa) {
        $this->id = $id;
        $this->idPessoa = $idPessoa;
        $this->itens = [];
        $this->total = 0;
        $this->data = date("Y-m-d-H:i:s");
    }

    // Adiciona item na venda
    public function adicionatItem(Produto $Produto){
        $this->itens[] = $produtos;
        $this->calcularTotal();
    }

    //Recalcula o total
    private function calcularTotal(){
        $this-> total = 0;
        foreach($this-> itens as $p){
            $this->total += $p->getPreco();
        }
    }

    //Getters
    public function getId() {
        return $this->id;
    }
    public function getIdPessoa() {
        return $this->idPessoa;
    }
    public function getItens() {
        return $this->itens;
    }
    public function getTotal() {
        return $this->total;
    }
    public function getData() {
        return $this->data;
    }

    //Converte para array (para salvar em JSON)
    public function toArray() {
        return [
            "id" => $this->id,
            "idPessoa" => $this->idPessoa,
            "itens" => array_map(function($p) {return $p->toArray();}, $this->itens),
            "total" => $this->total,
            "data" => $this->data
        ];
    }

    //Reconstroi objeto venda a partir de array (JSON)
    public static function fromArray($data){
        $venda = new Venda($data["id"], $data['idPessoa']);
        $venda -> data = $data['data'];
        $venda -> total = $data['total'];

        foreach ($data['itens'] as $p){
            $venda -> adicionarItem(Produto::fromArray($p));
        }

        return $venda;
    }
}
    
?>