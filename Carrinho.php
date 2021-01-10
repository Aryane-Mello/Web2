<!DOCTYPE html>

<html>
    <head>
        <title>Carrinho De Compras</title>   
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/carrinho.css">

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
                <li><a href="login_usuario.php">Login de Usuário</a></li>
                <li><a href="Sobre_FashionWall.php">Sobre A Loja</a></li>
                <li><a href="Administrador.php">Administrador</a></li>
                <li><a href="Black_Friday.php">Black friday</a></li>
            </ul>    
        </div>

        <div align="center">        
            <table border="1">

                <tr>
                    <td><h1>Produto</h1></td>
                    <td><h1>Nome do Produto</h1></td>
                    <td><h1>Preço</h1></td>
                    <td><h1>Quantidade</h1></td>
                    <td><h1>Total</h1></td>
                    <td><h1>Editar</h1></td>
                    <td><h1>Remover</h1></td>
                </tr>       

                <tr>
                    <td><img class="Imagens" src="Imagens/imagem1.jpeg" alt="Vestido"></td>
                    <td><h2>Vestido Longo Copacabana</h2></td>
                    <td><h2>R$ 289,90</h2></td>
                    <td><h2>1</h2></td>
                    <td><h2>-</h2></td>
                    <td><button type="submit">Editar</button></td>
                    <td><button type="submit">Remover</button></td>
                </tr>

                <tr>
                    <td><img class="Imagens" src="Imagens/imagem2.jpg" alt="Vestido"></td>
                    <td><h2>Vestido Midi Clima Perfeito</h2></td>
                    <td><h2>R$ 219,90</h2></td>
                    <td><h2>1</h2></td>
                    <td><h2>-</h2></td>
                    <td><button type="submit">Editar</button></td>
                    <td><button type="submit">Remover</button></td>
                </tr>

                <tr>
                    <td><img class="Imagens" src="Imagens/imagem3.jpeg" alt="Vestido"></td>
                    <td><h2>Vestido Doçura Romântica</h2></td>
                    <td><h2>R$ 219,90</h2></td>
                    <td><h2>2</h2></td>
                    <td><h2>729,70</h2></td>
                    <td><button type="submit">Editar</button></td>
                    <td><button type="submit">Remover</button></td>
                </tr>
            </table> 
        </div>

        <br>
        <div id="Rodapé">
            <div id="Rodapé_Links">
                <ol>
                    <li><a class="link_rodape" href="index.php">Página Inicial</a></li>   
                    <li><a class="link_rodape" href="Sobre_FashionWall.php">Sobre a Loja</a></li>    
                    <li><a class="link_rodape" href="login_usuario.php">Login de Usuário</a></li> 
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

