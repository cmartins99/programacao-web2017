<?php
class Carrinho {
    private $cliente;
    private $dataCompra;
    private $itens = array();
    private $valorTot;
    
    public function addItem(Item $item) {
        array_push($this->itens, $item); // adiciona um item ao array
    }
    public function getItens(){
        return $this->itens;
    }
    public function __construct($cliente) {
        $this->dataCompra = date('d-m-Y');  // recupera a data atual
        $this->cliente = $cliente; 
    }
    function getCliente() {
        return $this->cliente;
    }

    function getDataCompra() {
        return $this->dataCompra;
    }
function valorTotalApagar(){
        $this->valorTot = 0;
        foreach ($this->itens as $item) {
           // calcular o valor total do carrinho atualizando valorTot
            
        }
        return $this->valorTot;
    }

}

class Item {
    private $produto;
    private $valorUnitario;
    private $quant;
    private $valorTotal;

    function __construct($produto, $valorUnitario, $quant) {
        $this->produto = $produto;
        $this->valorUnitario = $valorUnitario;
        $this->quant = $quant;
        $this->valorTotal = $valorUnitario * $quant;
    }
}
