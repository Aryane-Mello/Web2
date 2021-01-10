<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>

    <form action="envia.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo"><br>
        <input type="submit" name="enviar">
    </form>

    <h3>ARQUIVOS ENVIADOS</h3>
    <?php require "lista.php"; ?> 
</body>

</html>