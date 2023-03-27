<?php

    include 'estoque.php';
    include 'estoquedao.php';

    $cod_produto = filter_input(INPUT_POST, 'cod_produto');
    $nome_produto = filter_input(INPUT_POST, 'nome_produto');
    $preco_compra = filter_input(INPUT_POST, 'preco_compra');
    $preco_venda = filter_input(INPUT_POST, 'preco_venda');
    $qtd_produtos = filter_input(INPUT_POST, 'qtd_produtos');
    $data_compra = filter_input(INPUT_POST, 'data_compra');

    $acao = filter_input(INPUT_POST, 'acao');

    $estoque = new estoque();
    $estoquedao = new estoqueDao();

    $estoque->setCodigo($cod_produto);
    $estoque->setNome($nome_produto);
    $estoque->setPrecoCompra($preco_compra);
    $estoque->setPrecoVenda($preco_venda);
    $estoque->setQtdProdutos($qtd_produtos);
    $estoque->setDataCompra($data_compra);


    if($acao == "Cadastrar"){
        $estoquedao->cadastrar($estoque);
    }else if($acao == "Consultar"){
        $estoquedao->consultar();
        foreach($estoquedao->consultar() as $consult){
            echo $consult['cod_produto']. " | ";
            echo $consult['nome_produto']. " | ";
            echo $consult['preco_venda']. " | ";
            echo $consult['preco_compra']. " | ";
            echo $consult['qtd_produtos']. " | ";
            echo $consult['data_compra']. " <br> ";
        }
    }else if($acao == "Atualizar"){
        $estoquedao->atualizar($estoque);
    }else if($acao == "Apagar"){
        $estoquedao->apagar($estoque);
    }
?>