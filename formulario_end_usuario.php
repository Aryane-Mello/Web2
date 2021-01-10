<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Wall</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body id="form2">

        <form class="form" action = "processa_end_usuario.php" method = "POST">
            <div class="card">
                <div class="card-top">
                    <img id="imgLogin2" src="Imagens/carrinho2.png" alt="">
                    <h2 class="titulo">ENDEREÇO</h2>
                    <p>Insira seus Dados!</p>
                </div>

                <div class="card-group">
		            <label>Endereço</label>
		            <input type = "text" name="txtendereco" placeholder="Insira o seu Endereço" required>
                </div>

                <div class="card-group">
                    <label>CPF</label>
                    <input type="text" name="txtcpf" placeholder="Informe o seu CPF" required>
                </div>

                <div class="card-group">
                    <label>Logradouro</label>
                    <input type="text" name="txtlogradouro" placeholder="Informe seu Logradouro" required>
                </div>

                <div class="card-group">
                    <label>Número</label>
                    <input type="text" name="txtnumero" placeholder="Digite o número da sua casa" required>
                </div>

                <div class="card-group">
                    <label>Complemento</label>
                    <input type="text" name="txtcomp" placeholder="Informe seu complemento" required>
                </div>

                <div class="card-group">
                    <label>Bairro</label>
                    <input type="text" name="txtbairro" placeholder="Informe seu Bairro" required>
                </div>

                <div class="card-group">
                    <label>Cidade</label>
                    <input type="text" name="txtcidade" placeholder="Informe sua Cidade" required>
                </div>

                <div class="card-group">
                    <label>CEP</label>
                    <input type="text" name="txtcep" placeholder="Informe seu CEP" required>
                </div>

                <div class="card-group btn">
                    <button type="submit">CADASTRAR ENDEREÇO</button>
                </div>
            </div>
        </form>



    </body>
</html>