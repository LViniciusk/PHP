<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01</title>
    <!--Variaveis-->
    <?php 
        $ano = isset($_POST["ano"]) ? $_POST["ano"] : date("Y");
        $idade = date("Y") - $ano;
        $votar = "[INDEFINIDO]";
        $dirigir = "[INDEFINIDO]";
    ?>
</head>
<body>
    <?php 
        if ($idade >=18){
            $votar = "pode votar";
            $dirigir = "pode dirigir";
        }elseif($idade >= 16 && $idade < 18){
            $votar = "pode votar não obrigatoriamente";
            $dirigir = "não pode dirigir";
        }else{
            $votar = "não pode votar";
            $dirigir = "não pode dirigir";
        }
        echo "com $idade anos, $votar e $dirigir";
    ?><br><br>

    <a href="ex01.html">Voltar</a>
</body>
</html>