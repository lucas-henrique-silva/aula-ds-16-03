<?php

    include 'estoque.php';
    include 'estoquedao.php';

    $nome_produto = filter_input(INPUT_POST, 'nomeproduto');
    $preco_compra = filter_input(INPUT_POST, 'precocompra');
    $preco_venda = filter_input(INPUT_POST, 'precovenda');
    $qtd_produto = filter_input(INPUT_POST, 'quantidadeproduto');
    $data_compra = filter_input(INPUT_POST, 'datacompra');

    $acao = filter_input(INPUT_POST, 'acao');

    $estoque = new estoque();
    $estoquedao = new estoqueDao();

    $estoque->setNome($nome_produto);
    $estoque->setPrecoCompra($preco_compra);
    $estoque->setPrecoVenda($preco_venda);
    $estoque->setQtdProduto($qtd_produto);
    $estoque->setDataCompra($data_compra);

    $estoquedao->cadastrar($estoque);
?>