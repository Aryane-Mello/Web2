<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
<form class="teste">
    <form class="form" action="index.php">
        <div class="card">
            <div class="card-top">
                <img class="imgLogin" src="Imagens/user.jpg" alt="">
                <h2 class="titulo">LOGIN</h2>
                <p>Faça login em nosso site!</p>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="Email" placeholder="Digite seu Email" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="Senha" placeholder="Digite sua Senha" required>
            </div>

            <div class="card-group">
                <label><input type="checkbox"> Mantenha-me Conectado</label>
            </div>

            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
            </div>

        </div>
    </form>
</form>

    <form class="teste">
        <form class="form" action = "processa_cad_usuario.php" method = "POST">
            <div class="card">
                <div class="card-top">
                    <img class="imgLogin" src="Imagens/user.jpg" alt="">
                    <h2 class="titulo">CADASTRO</h2>
                    <p>Faça o seu cadastro em nosso site!</p>
                </div>

                <div class="card-group">
		            <label>CPF</label>
		            <input type = "text" name="txtcpf" placeholder="Digite seu CPF no formato: xxx.xxx.xxx-xx" required>
                </div>

                <div class="card-group">
                    <label>Nome</label>
                    <input type="text" name="txtnome" placeholder="Informe Seu Nome Completo" required>
                </div>

                <div class="card-group">
                    <label>Email</label>
                    <input type="email" name="txtemail" placeholder="Informe Seu Email" required>
                </div>

                <div class="card-group">
                    <label>Senha</label>
                    <input type="password" name="txtsenha" placeholder="Digite sua Senha" required>
                </div>

                <div class="card-group">
                    <label>Data de Nascimento</label>
                    <input type="text" name="txtdata" placeholder="Digite Sua Data de Nascimento" required>
                </div>

                <div class="card-group">
                    <label>Sexo</label>
                </div>
                    <input type = "radio" value = "M" name = "rdSexo"> Masculino  <br>
                    <input type = "radio" value = "F" name = "rdSexo"> Feminino<br><br>

                <div class="card-group">
                    <label>Tipo de Usuário</label>
                    <select name="txttipo">
                        <option value="valor1">SELECIONE UMA DAS OPÇÕES ABAIXO</option>
                        <option value="cliente">Cliente</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>

                <div class="card-group btn">
                    <button type="submit">CADASTRAR-ME</button>
                </div>
    </form>
</body>
</html>