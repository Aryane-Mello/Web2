<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro do Usuário</title>
        <link rel="stylesheet" href="CSS/cadastro_user.css">
        <meta charset="utf-8">
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
                        <a href="Administrador.html"> <img id="imgUser" src="Imagens/user.jpg" alt="Imagem1"></a>
                    </td>
                    <td width="100">
                        <a href="Carrinho.html"> <img id="imgCarrinho" src="Imagens/carrinho.png" alt="Imagem1"></a>
                    </td>
                </tr>
            </table>
            <ul id="link_cabecalho"> 
                <li><a href="index.html">Página Inicial</a></li>
                <li><a href="Sobre_FashionWall.html">Sobre A Loja</a></li>
                <li><a href="Carrinho.html">Carrinho</a></li>
                <li><a href="administrador.html">Administrador</a></li>
                <li><a href="Cadastro_Produto.html">Cadastro de Produto</a></li>
                <li><a href="Black_Friday.html">Black friday</a></li>
            </ul>    
        </div>   

<?php
        require_once ('conexao.php');

        $cpf = $_POST['txtcpf'];
        $nome = $_POST['txtnome'];
        $email = $_POST['txtemail'];
        $senha = $_POST['txtsenha'];
        $data = $_POST['txtdata'];
        $sexo = $_POST['rdSexo'];
        $tipo = $_POST['txttipo'];

        $comando = "UPDATE usuario SET cpf = '$cpf',
                                       nomeUsuario = '$nome',
                                       email = '$email',
                                       senha = '$senha',
                                       DataDeNascimento = '$data',
                                       sexo = '$sexo',
                                       tipoUsuario = '$tipo'
                                       WHERE cpf = $cpf";

        $rodou = mysqli_query($conexao, $comando);
   
        if ($rodou){
            require "cabecalho_usuario.php";
            echo "Usuario atualizado com sucesso!";
        }
        else{
            echo "Erro ao atualizar usuario!";
        }
    
    ?>
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