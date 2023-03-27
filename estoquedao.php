<?php

include 'conexao.php';

class estoquedao{
    public function cadastrar(Estoque $estq){
        $sql = "insert into estoque(nome_produto, preco_venda, preco_compra, qtd_produtos, data_compra) values (?, ?, ?, ?, ?)"; 
        
        $bc = new Conexao(); # processo chamado de "instancia" onde estamos identificando uma classe e identificando variaveis de outros lugares
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindvalue(1, $estq->getNome());
        $valores->bindvalue(2, $estq->getPrecoVenda());
        $valores->bindvalue(3, $estq->getPrecoCompra());
        $valores->bindvalue(4, $estq->getQtdProdutos());
        $valores->bindvalue(5, $estq->getDataCompra());
        
        $resultado = $valores->execute();

        if($resultado){
            echo "atualizado com sucesso";
        }else{
            echo "erro ao atualizar";
        }
    }
    public function consultar(){
        $sql = "select * from estoque"; 
        
        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->execute();

        if ($valores->rowCount()>0){
            $resultado = $valores->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }
    public function atualizar(Estoque $estq){
        $sql = "update estoque set nome_produto=?, preco_venda=?, preco_compra=?, qtd_produtos=?, data_compra=? where cod_produto=?"; 
        
        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindvalue(1, $estq->getNome());
        $valores->bindvalue(2, $estq->getPrecoVenda());
        $valores->bindvalue(3, $estq->getPrecoCompra());
        $valores->bindvalue(4, $estq->getQtdProdutos());
        $valores->bindvalue(5, $estq->getDataCompra());
        $valores->bindvalue(6, $estq->getCodigo());

        $resultado = $valores->execute();

        if($resultado){
            echo "Atualizado com sucesso!";
        }else{
            echo "Erro ao atualizar";
        }
    }
    public function apagar(Estoque $estq){
        $sql = "delete from estoque where cod_produto=?"; 
        
        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindvalue(1, $estq->getCodigo());

        $resultado = $valores->execute();

        if($resultado){
            echo "Apagado com sucesso!";
        }
    }
}
?>