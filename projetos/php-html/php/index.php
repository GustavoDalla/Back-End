<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    $nome= $_GET["nome"];
    $sobrenome= $_GET["sobrenome"];
    $idade= $_GET["idade"];
    $peso= $_GET["peso"];

    echo "<p>$nome $sobrenome tem $idade anos de idade e pesa $peso kg.</p>";
    ?>
</body>
</html>