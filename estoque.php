<?php

class estoque{
    private $cod_produto, $nome_produto, $preco_venda, $preco_compra, $qtd_produto, $data_compra;

    public function getCodigo(){
        return $this->cod_produto;
    }
    public function setCodigo($cod_produto){
        $this->cod_produto = $cod_produto;
    }
    public function getNome(){
        return $this->nome_produto;
    }
    public function setNome($nome){
        $this->nome_produto = $nome;
    }
    public function getPrecoVenda(){
        return $this->preco_venda;
    }
    public function setPrecoVenda($preco_venda){
        $this->preco_venda= $preco_venda;
    }
    public function getPrecoCompra(){
        return $this->preco_compra;
    }
    public function setPrecoCompra($preco_compra){
        $this->preco_compra = $preco_compra;
    }
    public function getQtdProduto(){
        return $this->qtd_produto;
    }
    public function setQtdProduto($qtd_produto){
        $this->qtd_produto = $qtd_produto;
    }
    public function getDataCompra(){
        return $this->data_compra;
    }
    public function setDataCompra($data_compra){
        $this->data_compra = $data_compra;
    }
}

?>