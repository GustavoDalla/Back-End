<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("conexao.php");
?>
    <h1>conexao com o banco !!!!</h1>
    <?php
      
        $cmd = $conn->prepare("select * from aluno");
        $cmd-> execute();
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        echo"<pre>";
        print_r($res);
        echo"</pre>";

        foreach ($res as $key=> $vl){
         echo"".$vl["idaluno"]." ".$vl["nome"]." ".$vl["cidade"]."<br>";
        }
    ?>
</body>
</html>