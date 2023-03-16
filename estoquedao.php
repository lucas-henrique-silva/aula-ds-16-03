<?php

class estoqueDao{
    public function cadastrar(estoque $estq){
        $sql = "insert into estoque (nome_produto, preco_venda, preco_compra, qtd_produto, data_compra) values(?, ?, ?, ?, ?)"; 
        
        $bc = new Conexao(); # processo chamado de "instancia" onde estamos identificando uma classe e identificando variaveis de outros lugares
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindvalue(1, $estq->getNome());
        $valores->bindvalue(1, $estq->getPrecoVenda());
        $valores->bindvalue(1, $estq->getPrecoCompra());
        $valores->bindvalue(1, $estq->getQtdProduto());
        $valores->bindvalue(1, $estq->getDataCompra());
    }
    public function consultar(){

    }
    public function atualizar(){

    }
    public function apagar(){

    }

}
?>