<!DOCTYPE html>
<html>
    <head>
        <title>INSERIR PRODUTO</title>        
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/login.css">
    </head>
    <body id="form2">
    
        <form class="form" action = "processa_cad_produto.php" method = "POST">
            <div class="card">
                <div class="card-top">
                    <img id="imgLogin2" src="Imagens/carrinho2.png" alt="">
                    <h2 class="titulo">PRODUTO</h2>
                    <p>Insira um novo Produto!</p>
                </div>

                <div class="card-group">
		            <label>Produto</label>
		            <input type = "text" name="txtproduto" placeholder="Insira qual é o produto. EX: Vestido" required>
                </div>

                <div class="card-group">
                    <label>Categoria</label>
                    <input type="text" name="txtcategoria" placeholder="Informe qual é a Categoria do Produto" required>
                </div>

                <div class="card-group">
                    <label>Preço</label>
                    <input type="text" name="txtpreco" placeholder="Informe qual será o Preço" required>
                </div>

                <div class="card-group">
                    <label>Nome</label>
                    <input type="text" name="txtnome" placeholder="Digite um nome para o Produto" required>
                </div>

                <div class="card-group">
                    <label>Descrição</label>
                    <input type="text" name="txtdescricao" placeholder="Digite uma descrição para o Produto" required>
                </div>

                <div class="card-group">
                    <label>Estoque Mínimo</label>
                    <input type="text" name="txtestoqueminimo" placeholder="Informe o Estoque Mínimo" required>
                </div>

                <div class="card-group">
                    <label>Estoque Máximo</label>
                    <input type="text" name="txtestoquemaximo" placeholder="Informe o Estoque Máximo" required>
                </div>

                <div class="card-group">
                    <label>Quantidade no Estoque</label>
                    <input type="text" name="txtqntestoque" placeholder="Informe a Quantidade no Estoque" required>
                </div>

                <div class="card-group btn">
                    <button type="submit">CADASTRAR PRODUTO</button>
                </div>
            </div>
        </form>
    </body>
</html>