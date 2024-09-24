<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="titulo">
        <?php
        $numero_recebido = $_POST['numero'];
        echo "Tabuada do $numero_recebido";
        ?>
    </div>
    <div class="corpo">
        <?php
        
        for ($i=0; $i <= 10; $i++) { 
            echo "<p>$numero_recebido x $i => ".$numero_recebido * $i ."</p>";
        }
        
        ?>
    </div>
</body>
</html>
