<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhar Endereço</title>
    <link rel="stylesheet" href="CSS/administrador.css">
</head>
<body>
<div id="Cabeçalho">
            <table>
                <tr>
                    <td width="300"><h1> Fashion Wall </h1> </td>
                    <td>
                        <input type="text" id="txtBusca" placeholder="O que você deseja?"/>
                        <button type="submit" name="btnPesquisar" id="btnBusca">
                            <img src="Imagens/lupa.png" alt="Imagem1"> 
                        </button>
                    </td>
                    <td  width="400">
                        <div id="contato">
                            <img id="imgTel" src="Imagens/telefone.png" alt="Imagem1">
                            <h2> (15) 99999-9999</h2>
                        </div>
                    </td>
                    <td width="100">
                        <a href="Administrador.php"> <img id="imgUser" src="Imagens/user.jpg" alt="Imagem1"></a>
                    </td>
                    <td width="100">
                        <a href="Carrinho.php"> <img id="imgCarrinho" src="Imagens/carrinho.png" alt="Imagem1"></a>
                    </td>
                </tr>
            </table>
            <ul id="link_cabecalho"> 
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="login_usuario.php">Cadastro de Usuário</a></li>
                <li><a href="Sobre_FashionWall.php">Sobre A Loja</a></li>
                <li><a href="Carrinho.php">Carrinho</a></li>
                <li><a href="formulario_produto.php">Cadastro de Produto</a></li>
                <li><a href="Black_Friday.php">Black friday</a></li>
            </ul>    
        </div>
        
    <h1> Detalhar Endereço </h1>
    <a href="formulário_end_usuario.php"> Cadastrar novo Endereço </a>
    <?php
            require_once "conexao.php";

            $cpf = $_GET['cpf'];

            $comando = "SELECT * FROM endereco WHERE cpf = $cpf";
            $result = mysqli_query($conexao, $comando);
            
            while ($linha = mysqli_fetch_assoc($result)){
    ?>      
                <p> Endereço: <?=$linha['idEndereco']?> </p>
                <p> CPF: <?=$linha['cpf']?> </p>
                <p> Logradouro: <?=$linha['logradouro']?> </p>
                <p> Número: <?=$linha['numero']?> </p>
                <p> Complemento: <?=$linha['complemento']?> </p>
                <p> Bairro: <?=$linha['bairro']?> </p>
                <p> Cidade: <?=$linha['cidade']?> </p>
                <p> CEP: <?=$linha['cep']?> </p>

    <?php
        }
    ?>
    <br>
    <div id="Rodapé">
            <div id="Rodapé_Links">
                <ol>
                    <li><a class="link_rodape" href="index.php">Página Inicial</a></li>   
                    <li><a class="link_rodape" href="Sobre_FashionWall.php">Sobre a Loja</a></li>    
                    <li><a class="link_rodape" href="login_usuario.php">Cadastro do Usuário</a></li> 
                    <li><a class="link_rodape" href="formulario_produto.php">Cadastro do Produto</a></li>  
                    <li><a class="link_rodape" href="Carrinho.php">Carrinho de Compras</a></li>  
                    <li><a class="link_rodape" href="Administrador.php">Conta Administradora</a></li>
                </ol>
            </div>
            <div id="Rodapé_Contato">
                <div id="Rodapé_Contato_Texto"><h1>Redes Sociais:</h1></div>
                <div id="Rodapé_Contato_Redes">
                    <a href="https://twitter.com/?lang=pt"><img src="Imagens/twitter.png" alt="Twitter"></a>
                    <a href="https://www.facebook.com/"><img src="Imagens/facebook (1).png" alt="Facebook"></a>
                    <a href="http://instagram.com/"><img src="Imagens/instagram.png" alt="Instagram"></a>
                </div>
            </div>
            <div id="Rodapé_Pagamento">
                <div id="Rodapé_Pagamento_Texto"><h1>Formas de Pagamento:</h1></div>
                <div id="Rodapé_Pagamento_Img">
                    <img src="Imagens/1pagamento.png" alt="pagseguro">
                </div>
            </div>
            
            <div id="Rodapé_NomeLoja">
                <h1> Fashion Wall </h1>
            </div>
            
        </div>

    </body>
</html>