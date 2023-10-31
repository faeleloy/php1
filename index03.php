<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Campo_Grande");
    echo "Hoje é dia". date("d/m/Y");
    echo "e a hora atual". date("G:i:s");
    ?>
</body>
</html>