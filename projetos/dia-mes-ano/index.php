<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="shortcut icon" href="https://assets.zabbix.com/img/brands/php.svg" type="image/x-icon">
</head>
<body>
    <main style="text-align: center;">
        <h1><u>PHP</u></h1>
        <h2>3C D.D.S 23/02/2024</h2>
        <img src="https://assets.zabbix.com/img/brands/php.svg" alt="icone de php" style="height: 150px; width: 30%; margin-left: 170px"><br>
        <?php
            $var = 7;
            if ($var >=10){
                echo"Maior que dez ";
            } else {
                echo"Menor que dez \u{1F621} <br>";
                echo date("D d/m/y");
                echo "<br>";
                echo date("G/i/s");
            }
        ?>
    </main>
</body>
</html>