<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="script.php" method="post">
            <label for="numero">Digite um número para tabuada</label>
            <input style="width:220px" type="number" min="0" max="100" name="numero" id="numero">
            <input type="submit" value="Continuar">
        </form>
    </div>
</body>
</html>