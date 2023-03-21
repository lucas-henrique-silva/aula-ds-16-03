<?php

    include 'estoque.php';
    include 'estoquedao.php';

    $nome_produto = filter_input(INPUT_POST, 'nome_produto');
    $preco_compra = filter_input(INPUT_POST, 'preco_compra');
    $preco_venda = filter_input(INPUT_POST, 'preco_venda');
    $qtd_produtos = filter_input(INPUT_POST, 'qtd_produtos');
    $data_compra = filter_input(INPUT_POST, 'data_compra');

    $acao = filter_input(INPUT_POST, 'acao');

    $estoque = new estoque();
    $estoquedao = new estoqueDao();

    $estoque->setNome($nome_produto);
    $estoque->setPrecoCompra($preco_compra);
    $estoque->setPrecoVenda($preco_venda);
    $estoque->setQtdProdutos($qtd_produtos);
    $estoque->setDataCompra($data_compra);

    $estoquedao->cadastrar($estoque);
?>