<!DOCTYPE html>
<html>
    <head>
        <title>BLACK FRIDAY</title>
        <link rel="stylesheet" href="CSS/Black_Friday.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href="formulario_cadastro.php">Cadastro de Usuário</a></li>
                <li><a href="Sobre_FashionWall.php">Sobre A Loja</a></li>
                <li><a href="Carrinho.php">Carrinho</a></li>
                <li><a href="Administrador.php">Administrador</a></li>
                <li><a href="formulario_produto.php">Cadastro de Produto</a></li>
            </ul>    
        </div>

        <img id="Banner" src="Imagens/BlackFriday.jpg" alt="black Fiday">

        <main>   
            <div id="Black_Friday"> 

                <div class="Fileira1">

                    <img src="Imagens/imagem1.jpeg" alt="Item 1">
                    <a href="Itens/Item1.html"> Vestido Copacabana </a>
                    <h3>De: R$ 289,90</h3>
                    <h3>Por: R$ 144,95  </h3>


                </div>          

                <div class="Fileira1">

                    <img src="Imagens/imagem2.jpg" alt="Item 2">
                    <a  href="Itens/Item2.html"> Saia Jeito de Menina </a>
                    <h3>De: R$ 219,90</h3>
                    <h3>Por: R$ 109,95 </h3>


                </div>

                <div class="Fileira1">

                    <img src="Imagens/imagem3.jpeg" alt="Item 3">
                    <a  href="Itens/Item3.html"> Vestido Doçura Romântica </a>
                    <h3>De: R$ 219,90</h3>
                    <h3>Por: R$  </h3>


                </div>

                <div class="Fileira1">

                    <img src="Imagens/imagem4.jpeg" alt="Item 4">
                    <a  href="Itens/Item4.html"> Conjunto Sopro de Amor </a>
                    <h3>De: R$ 259,90</h3>
                    <h3>Por: R$ 109,95 </h3>

                </div> 

                <div class="Fileira1">

                    <img src="Imagens/imagem5.jpeg" alt="Item 5">
                    <a href="Itens/Item5.html"> Saia Jeito de Menina </a>
                    <h3>De: R$ 200,00</h3>
                    <h3>Por: R$ 100,00 </h3>

                </dIV>

                <div class="Fileira1">

                    <img src="Imagens/imagem7.jpeg" alt="Item 7">
                    <a href="Itens/Item7.html"> Vestido Jantar Romântico </a>
                    <h3>De: R$ 175,00</h3>
                    <h3>Por: R$ 87,50  </h3>

                </div> 
            </div> 
        </main>

        <br>

        <div id="Rodapé">
            <div id="Rodapé_Links">
                <ol>
                    <li><a class="link_rodape" href="index.php">Página Inicial</a></li>   
                    <li><a class="link_rodape" href="Sobre_FashionWall.php">Sobre a Loja</a></li>    
                    <li><a class="link_rodape" href="formulario_cadastro.php">Cadastro do Usuário</a></li> 
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
