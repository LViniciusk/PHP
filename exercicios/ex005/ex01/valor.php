<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php com form</title>
</head>
<body>
    <?php 
        $v = $_GET["v"];
        $rq = sqrt($v);
        echo "O valor digitado foi $v";
        echo "<br> A raiz quadrada de $v é ".number_format($rq,2);
    ?>
    <br>
    <br>
    <a href="valor.html">Voltar</a>
</body>
</html>