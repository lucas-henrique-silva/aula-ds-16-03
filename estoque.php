<?php

class estoque{
    private $cod_produto;
    private $nome_produto;
    private $preco_venda;
    private $preco_compra;
    private $qtd_produtos;
    private $data_compra;

    public function getCodigo(){
        return $this->cod_produto;
    }
    public function setCodigo($cod_produto){
        $this->cod_produto = $cod_produto;
    }
    public function getNome(){
        return $this->nome_produto;
    }
    public function setNome($nome_produto){
        $this->nome_produto = $nome_produto;
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
    public function getQtdProdutos(){
        return $this->qtd_produtos;
    }
    public function setQtdProdutos($qtd_produtos){
        $this->qtd_produtos = $qtd_produtos;
    }
    public function getDataCompra(){
        return $this->data_compra;
    }
    public function setDataCompra($data_compra){
        $this->data_compra = $data_compra;
    }
}

?>