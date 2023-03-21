<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=".../aula-ds/css/style.css">
    <link rel="shortcut icon" href=".../aula-ds/img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>
<body>
    <fieldset>
    <main class="conteudo">
        <form action="estoquecontroller.php" method="post">

        <label for="nomeproduto">Nome do Produto</label>
        <input type="text" name="nome_produto" placeholder="Digite o nome do produto..."><br><br>
        
        
        <label for="precocompra">Preço de Compra</label>
        <input type="text" name="preco_compra" placeholder="Digite o valor da compra..."><br><br>
        

        <label for="precovenda">Preço da Venda</label>
        <input type="text" name="preco_venda" placeholder="Digite o valor de venda..."><br><br>
        

        <label for="quantidadeproduto">Quantidade de Produtos</label>
        <input type="text" name="qtd_produtos" placeholder="Digite a quantidade de produtos..."><br><br>
        

        <label for="datacompra">Data da Compra</label>
        <input type="date" name="data_compra" placeholder="Digite a data da compra...."><br><br>
        <input type="submit" placeholder="Cadastrar" name="acao">
        </form>
    </main>
    </fieldset>
    
</body>
</html>
