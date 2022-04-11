<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex02</title>
    <!--variaveis-->
    <?php 
        $n1 = isset($_POST["n1"]) ? $_POST["n1"] : 0;
        $n2 = isset($_POST["n2"]) ? $_POST["n2"] : 0;
        $media = ($n1+$n2)/2;
    ?>
</head>
<body>
    <?php 
        echo "A média entre $n1 e $n2 é igual a $media";
        if ($media < 5){
            $sit = "Reprovado";
        }elseif($media >=5 && $media <7){
            $sit = "Recupereção";
        }else{
            $sit = "Aprovado";
        }
        echo "<br>Situação do aluno: $sit"
    ?>
</body>
</html>