<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01</title>
    <!--variaveis-->
    <?php 
        $op = isset($_POST["oper"]) ? $_POST["oper"] : 0;
        $n1 = isset($_POST["num"]) ? $_POST["num"] : 0;
    ?>
</head>
<body>
    <?php 
    switch ($op){
        case 1:
            echo "O dobro de $n1 é ".($n1*2);
            break;
        case 2:
            echo "O cubo de $n1 é ".pow($n1,3);
            break;
        case 3:
            echo "A raiz quadrada de $n1 é".sqrt($n1);
            break;
        default:
            echo "Escolha uma das opções anteriores.";
    }
    ?><br>
    <a href="ex01.html">Voltar</a>

    
</body>
</html>