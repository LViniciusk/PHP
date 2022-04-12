<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex02</title>
    <!--variaveis-->
    <?php 
    $n1 = isset($_POST["num"]) ? $_POST["num"] : 0;
    ?>
</head>
<body>
    <?php 
    switch ($n1){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Dia de semana";
            break;
        case 7:
        case 8:
            echo "Fim de semana";
            break;
        default:
            echo "Dia Invalido";
    }

    ?><br>
    <a href="ex02.html">Voltar</a> 
</body>
</html>