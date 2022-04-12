<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $ini = isset($_POST["ini"]) ? $_POST["ini"] : 0;
        $fim = isset($_POST["fim"]) ? $_POST["fim"] : 0;
        $inc = isset($_POST["inc"]) ? $_POST["inc"] : 1;
        if ($ini <= $fim){
            while($ini <= $fim){
                echo "$ini<br>";
                $ini+=$inc;
            }
        }else{
            while($fim <= $ini){
                echo "$ini<br>";
                $ini-=$inc;
            }
        }
    
    ?><br>
    <a href="ex03.html">Voltar</a>
</body>
</html>