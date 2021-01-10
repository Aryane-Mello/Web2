<!DOCTYPE html>

<html>
    <head>
        <title>Fashion Wall</title>
        <link rel="stylesheet" href="CSS/Sobre_FashionWall.css">

        <meta charset="utf-8">
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
                <li><a href="Carrinho.php">Carrinho</a></li>
                <li><a href="Administrador.php">Administrador</a></li>
                <li><a href="formulario_produto.php">Cadastro de Produto</a></li>
                <li><a href="Black_Friday.php">Black friday</a></li>
            </ul>    
        </div>

        <h2 id="Tema" align="center">Sobre a Loja</h2>
        <p align="center"> A Fashion Wall foi fundada na cidade Itapetininga em 2019, nasceu de um sonho inovador para conquistar as mulhers de todos os perfis, das mais jovens ousadas ás mais contempôraneas clássicas. Para trazer a mulher, facilidade na aquisição de peçãs exclusivas através da internet, oferecendo produtos com alto padrão de acabamentto, na alma da mão!</p>

        <div class="Informações">
            <h2 align="center">Missão:</h2>
            <p align="center">Proporcionar às nossas clientes, uma mulher ligada a cultura contemporânea, terem roupas adequadas a diversas situações do cotidiano, dentro das tendências de moda e design, com preços acessíveis, viabilizando seus sonhos com paixão, responsabilidade, criatividade e comprometimento, proporcionando sempre o melhor atendimento. </p>   
        </div>

        <div class="Informações">
            <h2 align="center">Visão:</h2>
            <p align="center">Ser uma empresa reconhecida com excelência no atendimento e satisfação dos clientes, rapidez na entrega e qualidade nos produtos. </p>
        </div>

        <div class="Informações">
            <h2 align="center">Valores:</h2>
            <ul>
                <li class="Valores">Honestidade</li>
                <li class="Valores">Ètica</li>
                <li class="Valores">Respeito</li>
                <li class="Valores">Confiança</li>
                <li class="Valores">Transparência</li>
                <li class="Valores">Qualidade</li>
                <li class="Valores">Modernidade</li>
            </ul>
        </div>
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
